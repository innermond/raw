<?php namespace App\Domain;

use App\Service\GetProduct;

class Product implements Spec {

  private $config;
  private $product;

  public function __construct(\App\Config\General $config, GetProduct $product) {
    $this->config = $config;
    $this->product = $product;
  }

	public function __invoke(array $input) : array {
    $products = $this->product->all();
    array_walk($products, function(&$el, $key){
      if(isset($el['description'])) {
        $el['description'] = explode("\n", $el['description']);
      }
      if(isset($el['price'])) {
        $el['price'] = explode("\n", $el['price']);
        $elem = &$el['price'];
        foreach($elem as &$line){
          $line = explode("\t", $line);
        }
      }
    });

		return compact('products');
	}
}
