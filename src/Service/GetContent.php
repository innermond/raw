<?php namespace App\Service;

class GetContent {

  public function fromFile($page) {
    $content = file_get_contents($page);
    $content = $content ?? '';

    return $content;
  }

}
