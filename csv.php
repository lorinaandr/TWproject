<?php
session_start();
 require_once 'config.php';

$filename = "statitici.csv";
$fp = fopen('php://output', 'w');
header('Content-type: application/csv');    
header('Content-Disposition: attachment; filename='.$filename);

fputcsv($fp, array('Numarul total de articole postate pe site'));
$articole = mysqli_query($link,"SELECT * FROM articole");
$total_articole = mysqli_num_rows($articole);
fputcsv($fp, array($total_articole));

fputcsv($fp, array('   '));

fputcsv($fp, array('Numarul total de pasionati de plante'));
$total_useri = mysqli_query($link,"SELECT * FROM useri");
$total_useri = mysqli_num_rows($total_useri);
fputcsv($fp, array($total_useri));

fputcsv($fp, array('   '));


fputcsv($fp, array('Numarul total de utilizatori cu ierbare proprii'));
$useri_cu_ierbar = mysqli_query($link,"SELECT DISTINCT id_user FROM ierbar");
$useri_cu_ierbar =  mysqli_num_rows($useri_cu_ierbar);
fputcsv($fp, array($useri_cu_ierbar));

fputcsv($fp, array('   '));

fputcsv($fp, array('Numarul total de imagini uploadate de utilizatori '));
$poze_useri = mysqli_query($link,"SELECT * FROM ierbar");
$poze_useri = mysqli_num_rows($poze_useri);
fputcsv($fp, array($poze_useri));

fputcsv($fp, array('   '));

fputcsv($fp, array('Cele mai citite articole')); 
fputcsv($fp, array('ID','URL articol','Denumire articol','ID-ul tau'));
$pageviews = mysqli_query($link,"SELECT * FROM pageviews group by page order by count(page) desc limit 3");
if(mysqli_num_rows($pageviews) > 0 ){
  while($rows = mysqli_fetch_assoc($pageviews)) {
   fputcsv($fp, $rows);
  }
}

fputcsv($fp, array('   '));

fputcsv($fp, array('Cele mai populare plante colectate'));
fputcsv($fp, array('ID planta','ID user','Denumire poza','Descriere','Denumire planta'));
$sql  = "SELECT * FROM ierbar group by filetitle order by count(filetitle) desc limit 5";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_assoc($result)) {
  	 fputcsv($fp, $row);
  }
}
exit;
?>