<?php
include_once('views/vistataller.php');
include_once('models/basededatos.php');
class TareasController
{
  private $vista;
  private $modelo;
  function __construct()
  {
    $this->modelo = new tallermodelo();
    $this->vista = new tallerView();
  }
  function iniciar($pagina){
      $taller = $this->modelo->getTareas();
      $this->vista->mostrar($taller);
     $this->vista->actualizar($pagina);
      }
      function galeria($pagina){
        //  $taller = $this->modelo->getTareas();
          $this->vista->actualizar($pagina);

        }




}
 ?>
