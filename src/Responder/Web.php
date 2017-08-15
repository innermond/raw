<?php namespace App\Responder;

use Psr\Http\Message\ResponseInterface as Response;
use App\Template\Spec as AsRenderer;

class Web implements Spec {

  private $renderer;
	private $config;
	private $layout;

  public function __construct(AsRenderer $renderer, \App\Config\General $config) {
    $this->renderer = $renderer;
    $this->config = $config;
  }

	public function __invoke(Response $w, array $output) : Response {
    $template = $this->layout ?? $this->config->Page['layout'];
    $cnt = $this->renderer->render($template, $output);
		$w->getBody()->write($cnt);
		return $w;
	}

	public function setLayout(string $layout) {
		$this->layout = $layout;
	}

}
