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

  public static function indexAction() {
    $cars = static::getModel()->latest();
    static::view("list", $cars);
  }

  function createAction() {

  }

  function storeAction() {

  }

  function editAction() {

  }

  function updateAction() {

  }

  function deleteAction() {

  }
}