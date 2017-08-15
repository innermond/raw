<?php namespace App\Template;

use Twig_Environment;

class TwigRenderer implements Spec {

  public function render($template, $data=[]){
    return $this->renderer->render("$template.html", $data);
  }

  private $renderer;

  public function __construct(Twig_Environment $renderer) {
    $this->renderer = $renderer;
  }
}
