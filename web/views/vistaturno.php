<?php
class turnoView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new smarty();
  }

  function mostrarhorario($turno,$fecha,$servicio){
    $this->smarty->assign('servicio',$servicio);
    $this->smarty->assign('fecha',$fecha);
    $this->smarty->assign('turno',$turno);
    $this->smarty->display('horaturno.tpl');
  }
}

 ?>
