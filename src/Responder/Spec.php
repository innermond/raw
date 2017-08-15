<?php namespace App\Responder;

use Psr\Http\Message\ResponseInterface as Response;

interface Spec {
	public function __invoke(Response $w, array $output) : Response;
}
