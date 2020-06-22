<?php 
session_start();
 require_once 'config.php';
  $id=  $_SESSION['id'];
   if( isset($_POST['submit-album'])){ 
  $album = mysqli_real_escape_string($link, $_POST['album-name']);
 $target = "albums/" .$album;
 mkdir($target);
 $file = "../img/album.png";
 $sql ="INSERT INTO albums(id_user,file, name) values(?,?,?)";
 if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "iss", $id,$file,$album);
if(mysqli_stmt_execute($stmt) ){ 
header('Location: profil.php');
} }
 }

?>
