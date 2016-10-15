<?php
require_once('controllers/error_controllers.php');
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
    case ConfigApp::$ACTION_MOSTRAR_TURNOS:
      $controller->mostrarturno();
      break;
    case ConfigApp::$ACTION_GUARDAR_TURNO:
      $controller->guardarturno();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TURNO:
      $controller->eliminarturno();
      break;
    default:
      echo "error";
      break;
}
}
?>
