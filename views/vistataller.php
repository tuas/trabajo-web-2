<?php
class tallerView
{
  private $smarty;
  //private $cargar;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrar($taller){
    $this->smarty->assign('taller',$taller);
    $this->smarty->display('templates/home.tpl');
  }
  function actualizar($action){
    //$this->smarty->assign("info","templates/".$action.".tpl");
    $this->smarty->display("templates/".$action.".tpl");
  }
  function getLista($turno){
    $this->smarty->assign('turno',$turno);
    $this->smarty->display('turno.tpl');
  }
  function mostrarhorario($dia){
    $this->smarty->assign('dia',$dia);
    $this->smarty->display('horaturno.tpl');
  }
}

 ?>
