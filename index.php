<?php

use app\controllers\CarController;

require_once "vendor/autoload.php";

if (isset($_GET["action"])) {
  $action = $_GET["action"];
  switch($action) {
    case "list":
      CarController::indexAction();
      break;
    default:
      echo "Page not found 404";
      break;
  }
}