<?php
session_start();
 require_once 'config.php';

  if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }

//Numarul total de articole pe site
$articole = mysqli_query($link,"SELECT * FROM articole");
$total_articole = mysqli_num_rows($articole);

// Numarul total de pasionati de plante ( useri inregistrati)
$total_useri = mysqli_query($link,"SELECT * FROM useri");
$total_useri = mysqli_num_rows($total_useri);

// numarul total de useri ce au ierbar
$useri_cu_ierbar = mysqli_query($link,"SELECT DISTINCT id_user FROM ierbar");
$useri_cu_ierbar =  mysqli_num_rows($useri_cu_ierbar);

// numarul total de imagini uploadate de useri
$poze_useri = mysqli_query($link,"SELECT * FROM ierbar");
$poze_useri = mysqli_num_rows($poze_useri);

// plante populare 
$sql  = "SELECT * FROM ierbar group by filetitle order by count(filetitle) desc limit 3";
$result = mysqli_query($link,$sql);
$plante_populare = array();
if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_assoc($result)) {
    $plante_populare[] = $row;
  }
}
// cele mai citite articole
$pageviews = mysqli_query($link,"SELECT * FROM pageviews group by page order by count(page) desc limit 3");
$total_pageviews = array();
if(mysqli_num_rows($pageviews) > 0 ){
  while($rows = mysqli_fetch_assoc($pageviews)) {
    $total_pageviews[] = $rows;
  }
}



?>