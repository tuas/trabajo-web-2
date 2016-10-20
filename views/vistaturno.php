<?php
class turnoView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarhorario($turno,$fecha){
    $this->smarty->assign('fecha',$fecha);
    $this->smarty->assign('turno',$turno);
    $this->smarty->display('horaturno.tpl');
  }
}

 ?>
