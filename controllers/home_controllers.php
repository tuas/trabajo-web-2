<?php
include_once('views/vistataller.php');
include_once('models/adminModel.php');
include_once('views/vistaadmin.php');

class TallerController{
  private $vista;
  private $admini;
  private $log;
  private $modelo;

  function __construct()
  {
    $this->vista = new tallerView();
    $this->admini = new adminmodelo();
    $this->log = new logView();
    $this->modelo = new homemodelo();
  }
  function checklogin(){
    $admini = $this->admini->getlogin();
    if($admini == 'login'){
      $this->log->mostrarlogin();
    }
    else{
      $this->error->mostrar_error('el usuario o la contraseña no coincide');
      $this->log->recarga();
    }
 }
  function home($pagina)
  {
    $this->vista->mostrar($pagina);
  }
function iniciar($pagina){
      $this->vista->actualizar($pagina);
  }
function galeria($pagina){
      $this->vista->actualizar($pagina);
  }
function servicio($pagina){
      $this->vista->actualizar($pagina);
      $ser = $this->modelo->getservicios();
      $this->vista->verservicios($ser);
  }
function turno($pagina){
      $this->vista->actualizar($pagina);
  }


}
 ?>
