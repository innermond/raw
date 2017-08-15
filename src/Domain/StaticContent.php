<?php namespace App\Domain;

use App\Service\GetContent;

class StaticContent implements Spec {

  private $config;
  private $folder;
  private $contentFrom;

  private $templateExtension = 'html';

  public function __construct(\App\Config\General $config, GetContent $getContent, $folder=null) {
    $this->config = $config;
    $this->folder = $folder ?? $this->config->Page['folder'];
    $this->getContent = $getContent;
  }

	public function __invoke(array $input) : array {
    $page = $input['app']['path'] ?? '';
    $page = $this->folder . $page . '.' . $this->templateExtension;
    $content = $this->getContent->fromFile($page);
    return compact('content');
  }
}
