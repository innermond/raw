<?php namespace App\Service;

class GetPizza implements GetProduct {

  private $pdo;

  public function __construct(\PDO $pdo) {
      $this->pdo = $pdo;
  }

  public function all() {
    $sql = 'select id, name, description, price, img from pizza';
    $stm = $this->pdo->query($sql, \PDO::FETCH_ASSOC);
    $all = $stm->fetchAll();
    return $all;
  }

}
