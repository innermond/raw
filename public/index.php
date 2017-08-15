<?php require dirname(__DIR__) . '/vendor/autoload.php';

use Dotenv\Dotenv;
use Relay\Middleware\ResponseSender;
use Relay\Middleware\ExceptionHandler;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use Zend\Diactoros\Response;
use Zend\Diactoros\ServerRequest;
use Zend\Diactoros\ServerRequestFactory;
use Relay\RelayBuilder as Builder;
use Auryn\Injector;
use FastRoute\RouteCollector;

$di = new Injector;
$di->alias(ServerRequestInterface::class, ServerRequest::class);
$di->share(ServerRequest::class);
$di->alias(ResponseInterface::class, Response::class);
$di->share(Response::class);
$di->share('PDO');
$di->delegate('PDO', function() use ($di) {
	$config = $di->make('App\Config\General');
	$pdo = new \PDO($config->PDO['dns']);
	$pdo->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
	return $pdo;
});
$di->share('App\Config\General');
$di->share('App\Config\DownloadFilesAllowed');
$di->alias('App\Template\Spec', 'App\Template\TwigRenderer');
$di->delegate('Twig_Environment', function() use ($di) {
	$cfg = $di->make('App\Config\General');
	$loader = new \Twig_Loader_Filesystem($cfg->SRC . '/templates');
	$cfg->DEVELOPMENT
	? $twig = new \Twig_Environment($loader, ['autoescape' => false])
	: $twig = new \Twig_Environment($loader, ['autoescape' => false, 'cache' => $cfg->CACHE]);
	return $twig;
});

$productAction = function($di) {
	$di->alias(App\Domain\Spec::class, App\Domain\Product::class);
	$di->alias(App\Input\Spec::class, App\Input\Web::class);
	$di->alias(App\Responder\Spec::class, App\Responder\Web::class);
	$di->prepare(App\Responder\Web::class, function($instance, $injector){
		$instance->setLayout('home');
	});
};
$pizzaAction = function() use ($di, $productAction) {
	$productAction($di);
	$di->alias(App\Service\GetProduct::class, App\Service\GetPizza::class);
	$class = App\Action::class;
	return $di->make($class);
};
$pastaSaladAction = function() use ($di, $productAction) {
	$productAction($di);
	$di->alias(App\Service\GetProduct::class, App\Service\GetPastaSalad::class);
	$class = App\Action::class;
	return $di->make($class);
};
$oferteAction = function() use ($di) {
	$di->alias(App\Domain\Spec::class, App\Domain\Offer::class);
	$di->alias(App\Input\Spec::class, App\Input\Web::class);
	$di->alias(App\Responder\Spec::class, App\Responder\Web::class);
	$di->prepare(App\Responder\Web::class, function($instance, $injector){
		$instance->setLayout('oferte');
	});
	$class = App\Action::class;
	return $di->make($class);
};
$staticContentAction = function() use ($di) {
	$di->alias(App\Domain\Spec::class, App\Domain\StaticContent::class);
	$di->alias(App\Input\Spec::class, App\Input\Web::class);
	$di->alias(App\Responder\Spec::class, App\Responder\Web::class);
	$class = App\Action::class;
	return $di->make($class);
};
$exception = function(\Exception $e, Response $w) use ($di) {
  $code = $e->getCode();
  if ($code < 100) $code = 500;
	$w = $w->withStatus($code);
	$content = $e->getMessage();
	$di->alias(App\Responder\Spec::class, App\Responder\Web::class);
	$class = App\Responder\Web::class;
	$instance = $di->make($class);
	return $instance($w, compact('content'));
};
$download = function() use ($di) {
	$di->prepare(App\Action\Download::class, function($obj,$di) {
		$d = $di->make(App\Config\DownloadFilesAllowed::class);
		$files = $d->Files();
		$obj->filesMapInit($files);
	});
	$class = App\Action\Download::class;
	return $di->make($class);
};
$emailAction = function() use ($di, $productAction) {
	$di->alias(App\Domain\Spec::class, App\Domain\Email::class);
	$di->alias(App\Input\Spec::class, App\Input\Web::class);
	$di->alias(App\Responder\Spec::class, App\Responder\Json::class);
	$di->alias(App\Domain\Email\Spec::class, App\Domain\Email\PHPMailerDriver::class);
	$class = App\Action::class;
	return $di->make($class);
};
$routes = [
  ['GET', '/', $pizzaAction],
  ['GET', '/pizza', $pizzaAction],
  ['GET', '/paste-salate', $pastaSaladAction],
  ['GET', '/oferte', $oferteAction],
  ['GET', '/comenzi', $staticContentAction],
  ['GET', '/lista-alergeni', $staticContentAction],
  ['GET', '/descarca-meniu', $download],
  ['POST', '/email', $emailAction],
];
$def = function(RouteCollector $r) use ($routes) {
  foreach($routes as $route) {
    call_user_func_array([$r, 'addRoute'], $route);
  }
};
$dispatcher = \FastRoute\simpleDispatcher($def);
$routing = function(ServerRequest $r, Response $w, callable $next) use ($dispatcher, $di, $exception) {
	$path = $r->getUri()->getPath();
	$r = $r->withAttribute('app', compact('path'));
	try {
		$info = $dispatcher->dispatch($r->getMethod(), $path);
		switch($info[0]) {
			case \FastRoute\Dispatcher::NOT_FOUND:
				throw new \Exception("$path not found", 404);
			break;
			case \FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
				$method = $info[1];
				throw new \Exception("$method not allowed", 405);
			break;
			case \FastRoute\Dispatcher::FOUND:
				$className = $info[1] ?? false;
				$action = is_callable($className) ? $className() : $di->make($className);
				$w = $action($r, $w);
				return $next($r, $w);
			break;
		}
	} catch (\Exception $e) {
			$w = $exception($e, $w);
			return $next($r, $w);
	}
};

$stack = [
  new ResponseSender,
  //new ExceptionHandler(new Response),
  $routing,
];
$b = new Builder();
$relay = $b->newInstance($stack);
$dotenv = new Dotenv('../');
$dotenv->load();
try {
	$relay(ServerRequestFactory::fromGlobals(), new Response);
} catch (Throwable $e) {
	echo $e->getTraceAsString();
}
