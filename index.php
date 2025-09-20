<?php

use app\controllers\CarController;

require_once "vendor/autoload.php";

if (isset($_GET["action"])) {
  $action = $_GET["action"];
  switch($action) {
    case "list":
      CarController::indexAction();
      break;
    case "create":
      CarController::createAction();
      break;
    case "store":
      CarController::storeAction();
      break;
    case "edit":
      CarController::editAction();
      break;
    case "update":
      CarController::updateAction();
      break;
    case "delete":
      CarController::deleteAction();
      break;
    default:
      echo "Page not found 404";
      break;
  }
}