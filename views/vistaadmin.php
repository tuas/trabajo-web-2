<?php

class logView{

  private $smarty;

  function __construct()
  {
    $this->smarty = new Smarty();
  }

  function mostrarlogin(){
       echo'bienvenido fabo';
  }
  function recarga(){
    $this->smarty->display('templates/login.tpl');
  }
}


 ?>
