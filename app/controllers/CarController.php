<?php 

namespace app\controllers;

use app\models\Car;

class CarController extends BaseController {

  /**
   * @return Car
   */
  public static function getModel() {
    if (is_null(static::$model)) {
      static::$model = new Car();
    }
    return static::$model;
  }

  // protected static $models = [];

  // protected function loadModel($modelName) {
  //     if (!isset(self::$models[$modelName])) {
  //         $class = "app\\models\\$modelName";
  //         self::$models[$modelName] = new $class();
  //     }
  //     return self::$models[$modelName];
  // }

  public static function indexAction() {
    $cars = static::getModel()->latest();
    static::view("list", $cars);
  }

  public static function createAction() {
    static::view("create");
  }

  public static function storeAction() {
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $created = static::getModel()
      ->setModel($_POST['model'])
      ->setPrice($_POST['price'])
      ->create();
      if ($created === true) {
        static::redirect("list");
      } else {
        echo "Error";
      }
    }
  }

  public static function editAction() {
    // var_dump($_GET);
    $data = static::getModel()::view($_GET['id']);
    static::view("edit", $data);
  }

  public static function updateAction() {
    // var_dump($_POST["model"]);
    // var_dump($_POST["price"]);
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $updated = static::getModel()
      ->setModel($_POST['model'])
      ->setPrice($_POST['price'])
      ->update($_POST["id"]);
      if ($updated === true) {
        static::redirect("list");
      } else {
        echo "Error";
      }
    }
  }

  public static function deleteAction() {
    static::getModel()->destroy($_GET["id"]);
    static::redirect("list");
  }
}