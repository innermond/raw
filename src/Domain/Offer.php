<?php namespace App\Domain;

use App\Service\GetOferte;

class Offer implements Spec {

  private $config;
  private $oferte;

  public function __construct(\App\Config\General $config, GetOferte $oferte) {
    $this->config = $config;
    $this->oferte = $oferte;
  }

	public function __invoke(array $input) : array {
    $oferte = $this->oferte->fromDirectory($this->config->OFERTE);
		return compact('oferte');
	}
}
