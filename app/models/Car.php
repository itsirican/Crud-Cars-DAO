<?php 

namespace app\models;

use PDO;

class Car extends Model {
  private $model;
  private $price;

  public function setModel($model) {
    $this->model = $model;
    return $this;
  }
  public function getModel() {
    return $this->model;
  }

  public function setPrice($price) {
    $this->price = $price;
    return $this;
  }
  public function getPrice() {
    return $this->price;
  }

  public function latest() {
    return static::database()->query("SELECT * FROM car order by id DESC")->fetchAll(PDO::FETCH_CLASS, __CLASS__);
  }

  public function create() {
    $reqState = static::database()->prepare("INSERT INTO car VALUES(null, ?, ?)");
    return $reqState->execute([$this->model, $this->price]);
  }

  public static function view($id) {
    return current(static::database()
    ->query("SELECT * FROM car WHERE id = $id")
    ->fetchAll(PDO::FETCH_CLASS, __CLASS__));
  }

  public function update($id) {
    $reqState = static::database()->prepare("UPDATE car SET model = ?, price = ? WHERE id = ?");
    return $reqState->execute([$this->model, $this->price, $id]);
  }

  public function destroy($id) {
    $reqState = static::database()->prepare("DELETE FROM car WHERE id = ?");
    return $reqState->execute([$id]);
  }
  
}