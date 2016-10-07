<?php
class tallerView
{
  private $smarty;
  private $cargar;

  function __construct()
  {
    $this->smarty = new Smarty();
    $this->carga = new Smarty();
  }

  function mostrar($taller){
    $this->smarty->assign('taller',$taller);
    $this->smarty->display('templates/home.tpl');
  }
  function actualizar($action){
    $this->smarty->assign("carga","templates/".$action.".tpl");
  }
}

 ?>
