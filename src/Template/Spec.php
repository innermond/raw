<?php namespace App\Template;

interface Spec {
  public function render($template, $data=[]);
}
