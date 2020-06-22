<?php
// Create database connection
session_start();
 require_once 'config.php';
 $msg =  "";
 $id=  $_SESSION['id'];
 $nume = $_SESSION['prenume']. ' ' . $_SESSION['nume'];
  if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }

if( isset($_POST['submit'])){
$file=$_FILES['file'];
 $imageTitle = $imageDesc =  "";
$fileName=$file["name"];
$fileType=$file["type"];
$fileSize=$file["size"];
$fileTempName=$file["tmp_name"];
$fileError=$file["error"];

$fileExt=explode(".",$file["name"]);
$fileActualExt= end($fileExt) ;

$allowed = array("jpg","jpeg","png");
if($fileError == 0){

if(in_array($fileActualExt, $allowed)){
if($fileSize <2000000){

$imageDesc = mysqli_real_escape_string($link, $_POST['filedesc']);
$imageTitle = mysqli_real_escape_string($link, $_POST['filetitle']);

  $target = "gallery/" .$fileName;
  $sql = "INSERT INTO ierbar (id_user, file, filedesc, filetitle) VALUES (? ,?, ? ,?)";

  if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "isss", $id,$fileName,$imageDesc,$imageTitle);
            
  if(mysqli_stmt_execute($stmt)){

     move_uploaded_file($_FILES['file']['tmp_name'], $target);  // adaugam imaginea in fisierul creat. 
     header("Location: profil.php");

} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
    exit();
}  }
}
else{
   $msg =" Fisierul ales este prea mare.";
    
  }
}
else{
$msg  =  "Fisierul ales nu este o imagine.";

} }
else {$msg = "Trebuie sa alegeti o imagine.";}
}

  if(isset($_POST['submit-profile'])){
 move_uploaded_file($_FILES['profileImage']['tmp_name'],"profil/".$_FILES['profileImage']['name']);
                $q = mysqli_query($link,"UPDATE useri SET image ='".$_FILES['profileImage']['name']."' WHERE id = '".$_SESSION['id']."'");
        }


?>