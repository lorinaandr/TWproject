<?php
 require_once 'config.php';
session_start();
    $id = $_GET['id_user'];
    $albumName= $_GET['name'];
   if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }
?>