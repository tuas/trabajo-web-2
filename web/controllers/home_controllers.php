<?php
include_once('views/vistataller.php');
include_once('models/loginModel.php');
include_once('views/vistalogin.php');
include_once('models/recomendadosModel.php');


class TallerController{
  private $vista;
  private $modelo;

  function __construct()
  {
    $this->vista = new tallerView();

    $this->modelo = new recomendadosmodelo();
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
      $ser = $this->modelo->getservicios();
      $this->vista->verservicios($ser);
  }
function turno($pagina){
      $this->vista->actualizar($pagina);
  }


}
 ?>
