<?php
include_once('models/loginModel.php');
include_once('views/vistalogin.php');
include_once('controllers/error_controllers.php');


class loginController{
  private $admini;
  private $turno;
  private $serv;
  private $recomendado;
  private $log;
  private $error;

function __construct()
{
  $this->admini = new loginmodelo();
  $this->log = new logView();
  $this->error = new errorController();
  $this->turno = new loginmodelo();
  $this->serv = new loginmodelo();
  $this->recomendado = new loginmodelo();
}
function checklogin(){
  $admini = $this->admini->getlogin();
  if($admini){
    $this->loading();
  }
  else{
    $this->error->mostrar_error('el usuario o la contraseña no coincide');
  }
}
function loading(){
  $turno = $this->turno->getturnos();
  $serv = $this->serv->getservicio();
  $recomendado = $this->recomendado->getrecomendado();
  $this->log->mostrarlogin($turno,$serv,$recomendado);
}

function mostrar_form_edit_t($action){
  if ($_POST) {
    $turno = $_POST;
    $this->log->mostrar_for($action,$turno);
  }
}

function edicion_tabla_turno(){
  if ($_POST) {
    $turno = $_POST;
    $this->admini->editturnodb($turno);
    $this->loading();
  }
}

function cargar_formulario($action){
    $this->log->mostrar_agregar($action);
}

function agregaenturno(){
  if ($_POST) {
    $turno = $_POST;
    $this->admini->meterturno($turno);
    $this->loading();
  }
}

function eliminar_t(){
  if ($_POST['id_turno']) {
    $idturno = $_POST['id_turno'];
    $turnos = $this->admini->deleturno($idturno);
  }
  else {
  $this->error->falta('el elemento a eliminar');
  }
  $this->loading();
}

function mostrar_form_edit_s($action){
  if ($_POST) {
  $serv = $_POST;
  $this->log->mostrar_for_s($action,$serv);
  }
}

function edicion_tabla_servicio(){
  if ($_POST) {
  $serv = $_POST;
  $this->admini->editserviciodb($serv);
  $this->loading();
  }
}

function agregaenservicio(){
  if ($_POST) {
  $serv = $_POST;
  $this->admini->meterservicio($serv);
  $this->loading();
  }
}

function eliminar_s(){
  if ($_POST['id_servicio']) {
    $idservicio = $_POST['id_servicio'];
    $servicios = $this->admini->deleservicio($idservicio);
  }
  $this->loading();
}

function mostrar_form_edit_r($action){
  if ($_POST) {
  $recomendado = $_POST;
  $this->log->mostrar_for_r($action,$recomendado);
  }
}

function edicion_tabla_recomendado(){
  if ($_POST) {
  $recomendado = $_POST;
  if(isset($_FILES['imagenes'])){
    $imagenesVerificadas = $this->getImagenesVerificadas($_FILES['imagenes']);
    if(count($imagenesVerificadas)>0){
        $this->admini->editrecomendadodb($recomendado,$imagenesVerificadas);
      }
    }
  }
  $this->loading();
}

function agregaenrecomendado(){
  $recomendado = $_POST;
  $this->admini->meterrecomendado($recomendado,$this->getImagenesVerificadas($_FILES['imagenes']));
  $this->loading();
}

  function eliminar_r(){
    if ($_POST['id_recomendado']) {
      $idrecomendado = $_POST['id_recomendado'];
      $recomendados = $this->admini->delerecomendado($idrecomendado);
    }
    $this->loading();
  }



function getImagenesVerificadas($imagenes){
  $imagenesVerificadas = [];
  for ($i=0; $i < count($imagenes['size']); $i++) {
    if($imagenes['size'][$i]>0 && $imagenes['type'][$i]=="image/jpeg"){
        $imagen_aux = [];
        $imagen_aux['tmp_name']=$imagenes['tmp_name'][$i];
        $imagen_aux['name']=$imagenes['name'][$i];
        $imagenesVerificadas[]=$imagen_aux;
    }
  }
return $imagenesVerificadas;
}

}


 ?>
