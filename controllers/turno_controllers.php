<?php
include_once('views/vistaturno.php');
include_once('models/turnoModel.php');
include_once('controllers/error_controllers.php');




class TurnoController{

  private $vista;
  private $modelo;
  private $fecha;
  private $error;




  function __construct(){
    $this->modelo = new tallermodelo();
    $this->vista = new turnoView();
    $this->fecha = new Smarty();
    $this->error = new errorController();
  }

  function mostrar_turnos(){
    if ($_POST['dia']) {
      $fecha = $_POST['dia'];
      $turno = $this->modelo->getTurnosVacios($fecha);
      $this->vista->mostrarhorario($turno,$fecha);
    }
    else {
      $this->error->falta('el dia');
    }
  }
  function guardarturno(){
      if ($_POST['nombre']) {
        if ($_POST['email']) {
             $turno = $_POST;
             $this->modelo->crearturno($turno);
          }
        else {
        $this->error->falta('el email');
        }
      }
      else {
      $this->error->falta('el nombre');
      }
    }
}

 ?>
