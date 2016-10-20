<?php

class adminmodelo{
  private $ad;
  function __construct(){
    $this->ad = '';
  }
  function getlogin()
 {
  if(isset($_POST['username']) && isset($_POST['password'])){
   if($_POST['username']=='fabo' && $_POST['password']=='1234'){
    $this->ad='login';
   }
   else{
    $this->ad='invalid user';
   }
   return $this->ad;
  }
 }
}


 ?>
