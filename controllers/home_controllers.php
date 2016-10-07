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
    $taller = $this->modelo->getTaller();
    $this->vista->mostrar($taller);
  }
function iniciar($pagina){
      $taller = $this->modelo->getTaller();
      $this->vista->actualizar($pagina);
      }
function galeria($pagina){
      $taller = $this->modelo->getTaller();
      $this->vista->actualizar($pagina);

        }
function servicio($pagina){
      $taller = $this->modelo->getTaller();
      $this->vista->actualizar($pagina);
              }
function turno($pagina){
      $taller = $this->modelo->getTaller();
      $this->vista->actualizar($pagina);
                    }





}
 ?>
