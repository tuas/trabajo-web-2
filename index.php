<?php
include_once('controllers/error_controllers.php');
include_once('controllers/home_controllers.php');
include_once('controllers/turno_controllers.php');
include_once('libs/smarty.class.php');
include_once('config/ConfigApp.php');

$turnocontroller = new turnoController();
$controller = new TallerController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->home('home');
  die();
}

switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ADMINISTRADOR:
      $turnocontroller->checklogin();
    break;
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
      $turnocontroller->mostrar_turnos();
      break;
    case ConfigApp::$ACTION_GUARDAR_TURNO:
      $turnocontroller->guardarturno();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TURNO:
      $turnocontroller->eliminarturno();
      break;
    default:
      $controller->fallo();
      break;
}

?>
