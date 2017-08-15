<?php namespace App\Config;

class DownloadFilesAllowed {

  private $filesMap = [
    'descarca-meniu' => 'meniu.pdf',
  ];

  public function __construct(\App\Config\General $config) {
    foreach($this->filesMap as $k => &$fn) {
      $fn = $config->DOWNLOAD . "/$fn";
    }
  }

  public function Files() {
    return $this->filesMap;
  }

}
