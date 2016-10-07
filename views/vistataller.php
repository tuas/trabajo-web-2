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
}

 ?>
