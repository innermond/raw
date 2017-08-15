<?php namespace App\Input;

use Psr\Http\Message\ServerRequestInterface as ServerRequest;

class Web implements Spec {
	
	public function __invoke(ServerRequest $r) :  array {
		$out = array_replace(
			(array) $r->getQueryParams(),
			(array) $r->getParsedBody(),
			(array) $r->getUploadedFiles(),
			(array) $r->getCookieParams(),
			(array) $r->getAttributes()
		);

		return $out ?: [];
	}
}
