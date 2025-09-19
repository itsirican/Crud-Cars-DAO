<?php 

namespace app\models;

use PDO;

class Car extends Model {
  private $model;
  private $price;

  public function setModel($model) {
    $this->model = $model;
  }
  public function getModel() {
    return $this->model;
  }

  public function setPrice($price) {
    $this->price = $price;
  }
  public function getPrice() {
    return $this->price;
  }

  public function latest() {
    return static::database()->query("SELECT * FROM car order by id DESC")->fetchAll(PDO::FETCH_CLASS, __CLASS__);
  }
  
}