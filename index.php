<?php
require_once('controllers/home_controllers.php');
require_once('libs/smarty.class.php');
require_once('config/ConfigApp.php');


$controller = new TallerController();
if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->home('home');
  die();
}
else {
switch ($_REQUEST[ConfigApp::$ACTION]) {
  case ConfigApp::$GALERIA:
    $controller->galeria('galeria');
    break;
  case ConfigApp::$SERVICIOS:
    $controller->servicio('servicios');
    break;
  case ConfigApp::$TURNO:
    $controller->turno('turno');
    break;
  case ConfigApp::$INICIO:
    $controller->iniciar('inicio');
    break;
  default:
    echo "error";
    break;
}
}
?>
