<?php 
session_start();
 require_once 'config.php';
 if(isset($_SESSION['loggedin'] )){
  $log = true;
  // pentru a calcula statistici privind paginile accesate
$user_id=$_SESSION['id'];
$page=$_SERVER['PHP_SELF'];
$query_page = "SELECT * from articole where page ='".$page."' ";
$results = mysqli_query($link,$query_page);
if(mysqli_num_rows($results) > 0 ){
  while($row = mysqli_fetch_assoc($results)) {
   $title = $row['nume_articol'];
  }
}
mysqli_query($link,"insert into pageviews values('','$page','$title','$user_id')");}
else{
  $log=false; }


?>