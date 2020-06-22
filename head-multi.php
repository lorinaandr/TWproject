<?php
session_start();
 require_once 'config.php';
 $msg =  "";
 $id=  $_SESSION['id'];
 $nume = $_SESSION['prenume']. ' ' . $_SESSION['nume'];
  if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{  $log=false; }
?>