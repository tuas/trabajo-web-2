<?php

class homemodelo{
  private $home;
  private $db;

  function __construct(){
    $this->home = [''];
    $this->db = new PDO('mysql:host=localhost;dbname=tallerchapista;charset=utf8', 'root', '');

  }
  function getservicios(){
    $posible = $this->db->prepare( "select * from recomendados");
    $posible->execute(array($turnos));
    return $posible->fetchall(PDO::FETCH_ASSOC);
  }

}


 ?>
