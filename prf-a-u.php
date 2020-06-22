<?php
 require_once 'config.php';
session_start();
$id = $_SESSION['idAltUser'] ;
 $nume = $_SESSION['prenumeAltUser']. ' ' . $_SESSION['numeAltUser'];
   if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }
?>