<?php namespace App\Config;

class General {

  public function __construct() {

		$this->DEVELOPMENT = true;
		$this->PRODUCTION = ! $this->DEVELOPMENT;

    $this->ROOT = dirname(__DIR__, 2);
    $this->SRC = dirname(__DIR__);
    $this->APP = dirname(__DIR__);
    $this->APPLOG = $this->ROOT . '/var/log/app.log';
    $this->PUBLIC = $this->ROOT . '/public';
    $this->DOWNLOAD = '/downloads';
    $this->OFERTE = $this->PUBLIC . '/images/oferte';
    $this->STORAGE = $this->SRC . '/storage';
    $this->CACHE = $this->STORAGE . '/cache';

    $this->PDO = [
      'dns' => 'sqlite:' . $this->STORAGE . '/pf1.db',
    ];

    $this->Page = [
      'folder' => $this->STORAGE . '/pages',
      'layout' => 'page',
    ];

    $this->Download = $this->PUBLIC . '/downloads';

    $this->Session = [
      'key' => '7C4PSSPPLqq9CJqBZIv20bwVelzzLiPXvhbUf7DFANM=',
    ];

    $this->Email = [
      'Host' => 'smtp.mail.yahoo.com',
      'Port' => 25,
      'SMTPAuth' => true,
      'Username' => getenv('EUSR'),
      'Password' => getenv('EPWD'),
      'FromTitle' => 'pf1.ro website',
    ];
  }
}
