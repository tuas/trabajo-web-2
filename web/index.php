<?php
include_once('controllers/error_controllers.php');
include_once('controllers/home_controllers.php');
include_once('controllers/turno_controllers.php');
include_once('controllers/login_controllers.php');
include_once('libs/Smarty.class.php');
include_once('config/ConfigApp.php');
$logincontroller = new loginController();
$turnocontroller = new turnoController();
$controller = new TallerController();
$errorcontroller = new errorController();

if (!array_key_exists(ConfigApp::$ACTION,$_REQUEST)){
  $controller->home('home');
  die();
}


print_r($_GET);
switch ($_REQUEST[ConfigApp::$ACTION]) {
    case ConfigApp::$ADMINISTRADOR:
      $logincontroller->checklogin();
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
    case ConfigApp::$ACTION_FORMEDIT_TABLA_TURNO:
      $logincontroller->mostrar_form_edit_t('formularioeditturno');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_TURNO:
      $logincontroller->edicion_tabla_turno();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_TURNO:
      $logincontroller->cargar_formulario('formularioagregar');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_TURNO:
      $logincontroller->agregaenturno();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_TURNO:
      $logincontroller->eliminar_t();
      break;
    case ConfigApp::$ACTION_FORMEDIT_TABLA_SERVICIO:
      $logincontroller->mostrar_form_edit_s('formularioeditservicio');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_SERVICIO:
      $logincontroller->edicion_tabla_servicio();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_SERVICIO:
      $logincontroller->cargar_formulario('formularioservicio');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_SERVICIO:
      $logincontroller->agregaenservicio();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_SERVICIO:
      $logincontroller->eliminar_s();
      break;
    case ConfigApp::$ACTION_FORMEDIT_TABLA_RECOMENDADO:
      $logincontroller->mostrar_form_edit_r('formularioeditrecomendado');
      break;
    case ConfigApp::$ACTION_EDIT_TABLA_RECOMENDADO:
      $logincontroller->edicion_tabla_recomendado();
      break;
    case ConfigApp::$ACTION_FORMADD_TABLA_RECOMENDADO:
      $logincontroller->cargar_formulario('formulariorecomendado');
      break;
    case ConfigApp::$ACTION_ADD_TABLA_RECOMENDADO:
      $logincontroller->agregaenrecomendado();
      break;
    case ConfigApp::$ACTION_ELIMINAR_TABLA_RECOMENDADO:
      $logincontroller->eliminar_r();
      break;
    default:
      $errorcontroller->fallo();
      break;
}

?>
