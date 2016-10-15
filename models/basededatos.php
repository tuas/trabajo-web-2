<?php
class tallermodelo
{
  private $turno;
  private $db;
  function __construct()
  {
    $this->turno =[''];
    $this->db = new PDO('mysql:host=localhost;dbname=taller chapista;charset=utf8', 'root', '');
  }


  function getTarea($Fecha){
    $posible = $this->db->prepare( "select * from tarea where Fecha=?");
    $posible->execute(array($Fecha));
    return $posible->fetch(PDO::FETCH_ASSOC);
  }
}
 ?>
