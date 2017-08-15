<?php namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as ServerRequest;
use App\Responder\Json;

class Email {

  private $config;
	private $responder;

  public function __construct(\App\Config\General $config, Json $responder) {
		$this->config = $config;
		$this->responder = $responder;
  }

  public function __invoke(ServerRequest $r, Response $w) : Response{
		sleep(1);
		$post = $r->getParsedBody();
		$out = true;
		return ($this->responder)($w, compact('out', 'post'));
  }
}
