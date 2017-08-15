<?php namespace App\Service;

class GetPastaSalad implements GetProduct {

  private $pdo;

  public function __construct(\PDO $pdo) {
      $this->pdo = $pdo;
  }

  public function all() {
    $sql = 'select id, name, description, price, img from pasta_salad';
    $stm = $this->pdo->query($sql, \PDO::FETCH_ASSOC);
    $all = $stm->fetchAll();
    return $all;
  }

}
