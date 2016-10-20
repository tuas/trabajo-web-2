<?php

class errorView{
  private $smarty;

  function __construct() {
    $this->smarty = new Smarty();
  }

  function mostrar_error($mensaje){
    echo $mensaje;
  }
  
}


 ?>
