<?php namespace App\Input;

use Psr\Http\Message\ServerRequestInterface as ServerRequest;

interface Spec {
	public function __invoke(ServerRequest $r) : array;
}
