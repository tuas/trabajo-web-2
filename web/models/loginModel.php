<?php

class loginmodelo{
  private $db;
  private $ad;
  function __construct(){
    $this->ad= [''];
    $this->db = new PDO('mysql:host=localhost;dbname=tallerchapista;charset=utf8', 'root', 'root');
  }
  function getlogin()
 {
   $username=$_POST['username'];
   $userpass=$_POST['password'];
   $sentencia = $this->db->prepare("SELECT * FROM login where user='$username' and pass='$userpass'");
   $sentencia->execute(array($username,$userpass));
   return $sentencia->fetch(PDO::FETCH_ASSOC);
 }
 function getturnos(){
   $posible = $this->db->prepare( "select * from turnos order by nombre ASC");
   $posible->execute();
   return $posible->fetchAll(PDO::FETCH_ASSOC);
 }
 function getservicio(){
   $posible = $this->db->prepare( "select * from servicios order by id_servicio ASC");
   $posible->execute();
   return $posible->fetchAll(PDO::FETCH_ASSOC);
 }
 function getrecomendado(){
   $posible = $this->db->prepare( "select * from recomendados order by id_recomendado ASC");
   $posible->execute();
   return $posible->fetchAll(PDO::FETCH_ASSOC);
 }
 function deleturno($idturno){
   $sentencia = $this->db->prepare("DELETE from turnos where id_turno=?");
   $sentencia->execute(array($idturno));
 }
 function deleservicio($idservicio){
   $sentencia = $this->db->prepare("DELETE from servicios where id_servicio=?");
   $sentencia->execute(array($idservicio));
 }
 function delerecomendado($idrecomendado){
   $sentencia = $this->db->prepare("DELETE from recomendados where id_recomendado=?");
   $sentencia->execute(array($idrecomendado));
 }
 function getnombreservicio($servicio){
   $sentencia = $this->db->prepare( "select * from servicios where servicio=?");
   $sentencia->execute(array($servicio));
   return $sentencia->fetch(PDO::FETCH_ASSOC);
}

 function editturnodb($turno){
   $id = $turno['id_turno'];
   if ($turno['fecha'] !='') {
     $fecha = $turno['fecha'];
     if ($turno['hora'] !='') {
      $hora = $turno['hora'];
      if ($turno['nombre'] !='') {
        $nombre = $turno['nombre'];
        $email = $turno['email'];
        $id_serv = $this->getnombreservicio($turno['servicio']);
        if ($id_serv) {
          $sentencia = $this->db->prepare("UPDATE turnos SET fecha=?, hora=?, nombre=?, email=?, fk_id_servicio=? WHERE id_turno=?");
          $sentencia->execute(array($fecha,$hora,$nombre,$email,$id_serv['id_servicio'],$id));
        }
      }
    }
  }
 }
 function meterturno($turno){
   if ($turno['fecha'] !='') {
     $fecha = $turno['fecha'];
     if ($turno['hora'] !='') {
      $hora = $turno['hora'];
      if ($turno['nombre'] !='') {
        $nombre = $turno['nombre'];
        $email = $turno['email'];
        $id_serv = $this->getnombreservicio($turno['servicio']);
        $sentencia = $this->db->prepare("INSERT INTO turnos(fecha,hora,nombre,email,fk_id_servicio) VALUES(?,?,?,?,?)");
        $sentencia->execute(array($fecha,$hora,$nombre,$email,$id_serv['id_servicio']));
      }
    }
  }
 }
 function getturnosconservicio($id){
   $sentencia = $this->db->prepare( "select * from servicios where servicio=?");
   $sentencia->execute(array($id));
   return $sentencia->fetch(PDO::FETCH_ASSOC);

 }
 function editserviciodb($serv){
   if ($serv['servicio'] !='') {
     $servicio = $serv['servicio'];
     $id = $serv['id_servicio'];
     $sentencia = $this->db->prepare("UPDATE servicios SET servicio=? WHERE id_servicio=?");
     $sentencia->execute(array($servicio,$id));
    }
 }

 function meterservicio($serv){
   if ($serv['servicio'] !='') {
     $servicio = $serv['servicio'];
     $sentencia = $this->db->prepare("INSERT INTO servicios(servicio) VALUES(?)");
     $sentencia->execute(array($servicio));
   }
 }
 function editrecomendadodb($recomendado,$imagenes){
   $id = $recomendado['id_recomendado'];
   if ($recomendado['servicio'] !='') {
     $servicio = $recomendado['servicio'];
     if ($recomendado['empresa'] !='') {
       $empresa = $recomendado['empresa'];
       $ciudad = $recomendado['ciudad'];
       $direccion = $recomendado['direccion'];
       foreach ($imagenes as $imagen) {
         $path="images/".uniqid()."_".$imagen['name'];
         move_uploaded_file($imagen['tmp_name'], $path);
       }
       $sentencia = $this->db->prepare("UPDATE recomendados SET servicio=?, empresa=?, ciudad=?, direccion=?, logo=? WHERE id_recomendado=?");
       $sentencia->execute(array($servicio,$empresa,$ciudad,$direccion,$path,$id));
     }
   }
 }

 function meterrecomendado($recomendado,$imagenes){
   if ($recomendado['servicio'] !='') {
     $servicio = $recomendado['servicio'];
     if ($recomendado['empresa'] !='') {
       $empresa = $recomendado['empresa'];
       $ciudad = $recomendado['ciudad'];
       $direccion = $recomendado['direccion'];
       foreach ($imagenes as $imagen) {
         $path="images/".uniqid()."_".$imagen['name'];
         move_uploaded_file($imagen['tmp_name'], $path);
        }
       $sentencia = $this->db->prepare("INSERT INTO recomendados(servicio,empresa,ciudad,direccion,logo) VALUES(?,?,?,?,?)");
       $sentencia->execute(array($servicio,$empresa,$ciudad,$direccion,$path));
     }
   }
 }
}

 ?>
