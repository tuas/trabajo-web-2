<?php
class tallerView
{
  private $smarty;


  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar($taller){
    $this->smarty->display('templates/home.tpl');
  }
  function actualizar($action){
    $this->smarty->display("templates/".$action.".tpl");
  }
  function verservicios($turno){
    $this->smarty->assign('turno',$turno);
    $this->smarty->display('servicios.tpl');
  }
}

 ?>
