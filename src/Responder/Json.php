<?php namespace App\Responder;

use Psr\Http\Message\ResponseInterface as Response;

class Json implements Spec {

	public function __invoke(Response $w, array $output) : Response {
		[$ok, $out, $code] = $output['payload'] ?? [];
		if (! $ok) $w = $code ? $w->withStatus($code) : $w->withStatus(500);
		$w = $w->withHeader('Content-Type', 'application/json');
		$w->getBody()->write(json_encode($out));
		return $w;
	}
}
