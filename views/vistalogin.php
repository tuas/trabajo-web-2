<?php

class logView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new smarty();
  }

  function mostrarlogin($turno,$serv,$recomendado){
     $this->smarty->assign('turno',$turno);
     $this->smarty->assign('serv',$serv);
     $this->smarty->assign('recomendado',$recomendado);
     $this->smarty->display("templates/funcionlogin.tpl");
  }

function mostrar_for($action,$turno){
  $this->smarty->assign('turno',$turno);
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_for_s($action,$serv){
  $this->smarty->assign('serv',$serv);
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_agregar($action){
  $this->smarty->display("templates/".$action.".tpl");
}
function mostrar_for_r($action,$recomendado){
  $this->smarty->assign('recomendado',$recomendado);
  $this->smarty->display("templates/".$action.".tpl");
}
}
 ?>
