<?php
include_once('views/vistataller.php');
include_once('models/basededatos.php');
class TallerController
{
  private $vista;
  private $modelo;
  function __construct()
  {
    $this->modelo = new tallermodelo();
    $this->vista = new tallerView();
  }
  function home($pagina)
  {
    $this->vista->mostrar($pagina);
  }
function iniciar($pagina){
      $this->vista->actualizar($pagina);
      }
function galeria($pagina){
      $this->vista->actualizar($pagina);
        }
function servicio($pagina){
      $this->vista->actualizar($pagina);
              }
function turno($pagina){
      $this->vista->actualizar($pagina);
                    }
function mostrarturno(){
  $key = $_GET['Fecha'];
  $this->modelo->eliminarTarea($key);
  $tareas = $this->modelo->getTareas();
  $this->vista->getLista($tareas);
                    }




}
 ?>
