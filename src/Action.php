<?php namespace App;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as ServerRequest;

use App\Domain\Spec as AsDomain;
use App\Responder\Spec as AsResponder;
use App\Input\Spec as AsInput;

class Action {

	private $responder;
	private $domain;
	private $input;

	public function __construct(AsDomain $domain, AsResponder $responder, AsInput $input) {
		$this->responder = $responder;
		$this->domain = $domain;
		$this->input = $input;
	}

	public function __invoke(ServerRequest $r, Response $w) : Response {
		$input = ($this->input)($r);
		$output = ($this->domain)($input);
		$output['app'] = &$input['app'];
		return ($this->responder)($w, $output);
	}
}
