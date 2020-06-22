<?php
// Create database connection
session_start();
 require_once 'config.php';
 $msg = $album_name = $album_id = "";
 $id=  $_SESSION['id'];
 $nume = $_SESSION['prenume']. ' ' . $_SESSION['nume'];
  if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }

if(isset($_GET['id'])){
$_SESSION['album-id'] = $_GET['id'];}

$sql = "SELECT * from albums where id='".$_SESSION['album-id']."' ";
$stmt= mysqli_stmt_init($link); 

    if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $result= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($result)) { 
    $album_name = $row['name'];
  } }


if( isset($_POST['submit'])){
$album_id = $_SESSION['album-id'];
//echo $album_id;
$sql = "SELECT * from albums where id='$album_id' ";
$stmt= mysqli_stmt_init($link); 

    if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $result= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($result)) { 
    $album_name = $row['name'];
  } }

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

  $target = "../projectTW/albums/".$album_name."/".$fileName;
  $sql = "INSERT INTO ierbar (id_user, file, filedesc, filetitle, album) VALUES (? ,?, ? ,?,?)";
    if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "issss", $id,$fileName,$imageDesc,$imageTitle,$album_name);
            

  if(mysqli_stmt_execute($stmt)){

     move_uploaded_file($_FILES['file']['tmp_name'], $target);  // adaugam imaginea in fisierul creat. 
    header('Location: profil-album.php?id='.$_SESSION['album-id'].'');

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

$id = $_SESSION['id'];
  if(isset($_POST['submit-profile'])){
 move_uploaded_file($_FILES['profileImage']['tmp_name'],"profil/".$_FILES['profileImage']['name']);
                $q = mysqli_query($link,"UPDATE useri SET image ='".$_FILES['profileImage']['name']."' WHERE id = '".$_SESSION['id']."'");
        }
?>