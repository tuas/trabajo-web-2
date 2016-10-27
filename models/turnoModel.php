<?php


class tallermodelo{
  private $turno;
  private $db;
  private $servicios;


  function __construct(){
    $this->turno =[''];
    $this->db = new PDO('mysql:host=localhost;dbname=tallerchapista;charset=utf8','root','root');
    $this->servicios =[''];
  }


  function getTurnos($turnos){
    $posible = $this->db->prepare( "select * from turnos where Fecha='$turnos'");
    $posible->execute(array($turnos));
    return $posible->fetchAll(PDO::FETCH_ASSOC);
  }

  function getServivios(){
    $posible = $this->db->prepare( "select * from servicios");
    $posible->execute();
    return $posible->fetchAll(PDO::FETCH_ASSOC);
  }

  function getTurnosVacios($turno){
    $valido = array();
    $invalidos = $this->getTurnos($turno);
    $a = 8;
    $b = 0;
    while ($a <= 21) {
      $hora = $a;
      $todos = array($hora);
      if (is_array($invalidos) || is_object($invalidos)){
        foreach ($invalidos as $elementoturnos ) {
            if ($elementoturnos['hora'] == $a ) {
            $todos[] = $elementoturnos['fk_id_servicio'];
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
    $servicios = $this->getServivios();
    $fecha = $turnos['dia'];
    $nombre = $turnos['nombre'];
    $email = $turnos['email'];
    foreach ($servicios as $serv) {
      $nombreser = $serv['servicio'];
      $identidad = $serv['id_servicio'];
      if ($turnos[$nombreser] > 0) {
        $sentencia = $this->db->prepare("INSERT INTO turnos(fecha,hora,nombre,email,fk_id_servicio) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($fecha,$turnos[$nombreser],$nombre,$email,$identidad));
      }
    }
  }
}


 ?>
