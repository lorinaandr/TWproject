<?php
session_start();
 require_once 'config.php';
require_once 'fpdf.php';
$pdf = new FPDF('l','mm','A4');
$pdf->AddPage();
$pdf->SetTitle('Statisticile Plantonline');
$pdf->SetFont('times','B',16);
$pdf->SetFillColor(152,251,152);
$pdf->Rect(10, 10, 270, 10, 'F');
$pdf->Cell(270,10,"Statisticile Plantonline",1,1,'C');

$pdf->Ln();
$pdf->Ln();

$pdf->Cell(150,10,"Numarul total de articole postate pe site",0,0);
$articole = mysqli_query($link,"SELECT * FROM articole");
$total_articole = mysqli_num_rows($articole);
$pdf->Cell(30,10,$total_articole,0,1);

$pdf->Ln();

$pdf->Cell(150,10,"Numarul total de pasionati de plante",0,0);
$total_useri = mysqli_query($link,"SELECT * FROM useri");
$total_useri = mysqli_num_rows($total_useri);
$pdf->Cell(30,10,$total_useri,0,1);

$pdf->Ln();

$pdf->Cell(150,10,"Numarul total de utilizatori cu ierbare",0,0);
$useri_cu_ierbar = mysqli_query($link,"SELECT DISTINCT id_user FROM ierbar");
$useri_cu_ierbar =  mysqli_num_rows($useri_cu_ierbar);
$pdf->Cell(30,10,$useri_cu_ierbar,0,1);

$pdf->Ln();

$pdf->Cell(150,10,"Numarul total de imagini uploadate de utilizatori",0,0);
$poze_useri = mysqli_query($link,"SELECT * FROM ierbar");
$poze_useri = mysqli_num_rows($poze_useri);
$pdf->Cell(30,10,$poze_useri,0,1);

$pdf->Ln();
$pdf->SetFillColor(152,251,152);
$pdf->Rect(10, 120, 270, 10, 'F');
$pdf->Cell(270,10,"Cele mai citite articole",1,1,'C');
$pdf->Ln();
$pdf->SetFont('times','b',13);
$pdf->Cell(30,10,"ID ",1,0);
$pdf->Cell(70,10,"URL articol",1,0);
$pdf->Cell(155,10,"Denumire articol",1,0);
$pdf->Cell(30,10,"ID utilizator",1,1);

$pageviews = mysqli_query($link,"SELECT * FROM pageviews group by page order by count(page) desc limit 3");
if(mysqli_num_rows($pageviews) > 0 ){
  while($rows = mysqli_fetch_assoc($pageviews)) {
  	 $pdf->Cell(30,10,$rows['id'],1,0);
  	 $pdf->Cell(70,10,$rows['page'],1,0);
  	 $pdf->Cell(155,10,$rows['title'],1,0);
  	 $pdf->Cell(30,10,$rows['user_id'],1,1);

  }
}

$pdf->Ln();
$pdf->SetFont('times','b',16);

$pdf->Cell(270,10,"Clasamentul celor mai populare plante colectate",1,1,'C');
$pdf->Ln();
$pdf->SetFont('times','b',13);
$pdf->Cell(30,10,"ID planta",1,0);
$pdf->Cell(30,10,"ID user",1,0);
$pdf->Cell(70,10,"Denumire poza",1,0);
$pdf->Cell(70,10,"Descriere poza",1,0);
$pdf->Cell(70,10,"Denumire planta",1,1);
$sql  = "SELECT * FROM ierbar group by filetitle order by count(filetitle) desc limit 5";
$result = mysqli_query($link,$sql);
if(mysqli_num_rows($result) > 0 ){
  while($row = mysqli_fetch_assoc($result)) {
  	 $pdf->Cell(30,10,$row['id'],1,0);
  	 $pdf->Cell(30,10,$row['id_user'],1,0);
  	 $pdf->Cell(70,10,$row['file'],1,0);
  	 $pdf->Cell(70,10,$row['filedesc'],1,0);
  	 $pdf->Cell(70,10,$row['filetitle'],1,1);
  }
}
//$pdf->Output();
$pdf->Output('statistici.pdf','D');

?>