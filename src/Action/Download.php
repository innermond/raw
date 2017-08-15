<?php namespace App\Action;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as ServerRequest;
use Zend\Diactoros\Stream as Stream;
use App\Exception\NotFound;

class Download {

  private $config;
  private $folder;
  private $filesMap;

  public function __construct(\App\Config\General $config, $files=[], $folder=null) {
    $this->config = $config;
    $this->folder = $folder ?: $this->config->Download;

    $this->filesMapInit($files);
  }

  public function filesMapInit($files=[]) {
    $this->filesMap = $files;
  }

  public function __invoke(ServerRequest $r, Response $w) : Response{
    $page = ltrim($r->getUri()->getPath(), '/');
    if ( ! isset($this->filesMap[$page])) {
      // not found
      return $w;
    }
    $file = $this->config->PUBLIC . $this->filesMap[$page];
    $filePublic = basename($this->filesMap[$page]);
		$fh = fopen($file, 'rb');
		if ( ! $fh) throw new NotFound($filePublic);
    $w = $w
      ->withHeader('Content-type', 'application/octet-stream')
      ->withHeader('Content-Transfer-Encoding', 'Binary')
      ->withHeader('Content-Length', filesize($file))
      ->withHeader('Content-disposition', "attachment; filename=\"$filePublic\"");
    $b = new Stream($fh);
    return $w->withBody($b);
  }
}
