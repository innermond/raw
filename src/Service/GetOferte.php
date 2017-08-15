<?php namespace App\Service;

class GetOferte {

  public function fromDirectory($directory) {
    $content = array_filter(array_diff(scandir($directory), ['.', '..']), function($file) use($directory) { return is_file("$directory/$file"); });
    return $content;
  }

}
