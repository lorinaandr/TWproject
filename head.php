<?php 
session_start();
 require_once 'config.php';
 if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }
   ?>