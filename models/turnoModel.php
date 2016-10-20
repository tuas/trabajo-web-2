<?php


class tallermodelo
{
  private $turno;
  private $db;
  private $servicios;
  function __construct()
  {
    $this->turno =[''];
    $this->db = new PDO('mysql:host=localhost;dbname=tallerchapista;charset=utf8', 'root', '');
    $this->servicios =[''];
  }


  function getTurnos($turnos){
    $posible = $this->db->prepare( "select * from tarea where Fecha='$turnos'");
    $posible->execute(array($turnos));
    return $posible->fetch(PDO::FETCH_ASSOC);
  }
  function getTurnosVacios($turno){
    $valido = array();
    $invalidos = $this->getTurnos($turno);
    $a = 8;
    $b = 0;
    while ($a <= 21) {
      $hora = $a;
      $mecanica = 0;
      $chapa = 0;
      $pintura = 0;
      $todos = array($hora,$mecanica,$chapa,$pintura);
      if (is_array($invalidos) || is_object($invalidos)){
        foreach ($invalidos as $turnos ) {
          if ($turnos[3] == $a ) {
            if ($todos[1] == 0) {
              $todos[1] = $invalidos['mecanica'];
            }
            if ($todos[2] == 0) {
              $todos[2] = $invalidos['chapa'];
            }
            if ($todos[3] == 0) {
              $todos[3] = $invalidos['pintura'];
            }
          }
        }
        $valido[$b] = $todos;
      }
      else {
        $valido[$b] = $todos;
      }
      $a++;
      $b++;
    }
    return $valido;
  }

  function crearturno($turnos){
    $fecha = $turnos['dia'];
    $nombre = $turnos['nombre'];
    $email = $turnos['email'];
    $hmecanica = $turnos['mecanica'];
    $hchapa = $turnos['chapa'];
    $hpintura = $turnos['pintura'];
    $clienteactual = $this->getcliente($nombre,$email);

  }
  function ponerturno($fecha,$hora,$clienteactual,$hmecanica,$hchapa,$hpintura){
    if ($hmecanica !=0) {
      $sentencia = $this->db->prepare("INSERT INTO turno(fecha,hora,fk_id_cliente,mecanica,chapa,pintura) VALUES($fecha,$hora,$clienteactual,1,0,0)");
      $sentencia->execute(array($turno));
    }
    if ($chapa !=0) {
      $sentencia = $this->db->prepare("INSERT INTO turno(fecha,hora,fk_id_cliente,mecanica,chapa,pintura) VALUES($fecha,$hora,$clienteactual,0,1,0)");
      $sentencia->execute(array($turno));
    }
    if ($pintura !=0) {
      $sentencia = $this->db->prepare("INSERT INTO turno(fecha,hora,fk_id_cliente,mecanica,chapa,pintura) VALUES($fecha,$hora,$clienteactual,0,0,1)");
      $sentencia->execute(array($turno));
    }
  }
  //  print_r($turnos);
    //$sentencia = $this->db->prepare("INSERT INTO turno(dia,horas,nombre,email) VALUES(?)");
    //$sentencia->execute(array($turno));
    //$id_turno = $this->db->lastInsertId
  function getcliente($nombre,$email){
    $persona = $this->buscarcliente($nombre);
    if (!$persona) {
      $persona = $this->cargarcliente($nombre,$email);
      return $persona;
    }
    else {
      $identetidad = $persona['id_cliente'];
      return $identetidad;
    }

  }

  function buscarcliente($nombre){
    $sentencia = $this->db->prepare( "select * from clientes where nombre='$nombre'");
    $sentencia->execute(array($nombre));
    return $sentencia->fetch(PDO::FETCH_ASSOC);
  }
  function cargarcliente($nombre,$email){
    $sentencia = $this->db->prepare('INSERT INTO clientes(nombre,email) VALUES($nombre,$email)');
    $sentencia->execute(array($nombre,$email));
    $id_cliente = $this->db->lastInsertId();
    return $id_cliente;
  }
}
 ?>
