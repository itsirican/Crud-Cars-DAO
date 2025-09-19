<?php 

namespace app\controllers;

class BaseController {
  protected static $model;

  public static function view($view, $cars) {
    require "resources/views/".$view.".php";
  }
}