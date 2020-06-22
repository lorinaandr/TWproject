<?php 
session_start();
 require_once 'config.php';

 //pentru a sterge poze 
 if( isset($_POST['id'])){ 
$id = $_POST['id'];
$stmt= mysqli_stmt_init($link); 
$query = "DELETE from ierbar where id ='$id'"; 
$sql = "  SELECT * FROM ierbar WHERE id= '$id'"; 
    if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{mysqli_stmt_execute($stmt);
     $result= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($result)) { 
   if(!mysqli_stmt_prepare($stmt,$query)){
   echo "Eroare sql";
    }else{
      if($row['album'] ==''){//sterg imaginea ce nu este intr-un album
         mysqli_stmt_execute($stmt);
           $path = "../projectTW/gallery/".$row['file'];
            unlink($path); 
            header('Location: profil.php');
}else{   
 mysqli_stmt_execute($stmt); // sterg  imaginea ce  este intr un album
 $path = "../projectTW/albums/".$row['album']."/".$row['file'];
  unlink($path);
 header('Location: profil-album.php?id='.$row['album'].'');} 
 }} } }
   
 // stergere album din profil
 if(isset($_POST['sterge-album']) ){ 
$id = $_GET['id'];
$album = $_GET['album'];  
$sql = "DELETE from albums where id = '$id'";
$sql2 = "DELETE from ierbar where album = '$album'";
$stmt= mysqli_stmt_init($link); 
 if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{ mysqli_stmt_execute($stmt);
      header('Location: profil.php'); }
if(!mysqli_stmt_prepare($stmt,$sql2)){
   echo "Eroare sql";
    }else{
   mysqli_stmt_execute($stmt);
header('Location: profil.php');}
    } 

//eliminam poza din album
if( isset($_POST['elimina-poza'])){ 
$id = $_GET['id'];
$album = $_GET['album']; 
$fileName=  $_GET['file']; 
$source_file = 'albums/'.$album.'/'.$fileName.'';
 $target = "gallery/";
$sql = "UPDATE ierbar set album=' ' where id='$id' ";
$stmt= mysqli_stmt_init($link); 
if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
 mysqli_stmt_execute($stmt);
  rename($source_file, $target . pathinfo($source_file, PATHINFO_BASENAME));
  header('Location: profil-album.php?id='.$_SESSION['album-id'].'');
}
 }

 // mutare poza in album 
 if( isset($_POST['muta-in-album'])){  
$id = $_GET['id'];
$album =  $_POST['albums'];
$target = 'albums/'.$album.'/';
 $source_file = "gallery/".$_GET['file'];
$sql = "UPDATE ierbar set album='$album' where id='$id' ";
$stmt= mysqli_stmt_init($link); 
if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
 mysqli_stmt_execute($stmt);
  rename($source_file, $target . pathinfo($source_file, PATHINFO_BASENAME));
  header('Location: profil.php');
}
 }
  // mutare poza dintr-un album in alt album
 if( isset($_POST['album-in-album'])){  
$id = $_GET['id'];
$album =  $_POST['albums'];
$target = 'albums/'.$album.'/';
 $source_file = "albums/".$_GET['alb']."/".$_GET['file'];
$sql = "UPDATE ierbar set album='$album' where id='$id' ";
$stmt= mysqli_stmt_init($link); 
if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
 mysqli_stmt_execute($stmt);
  rename($source_file, $target . pathinfo($source_file, PATHINFO_BASENAME));
  header('Location: profil.php');
}
 }
// pentru a face un album privat 
  if( isset($_POST['make-private'])){  
$id = $_GET['id'];
$album =  $_GET['album'];
$sql = "UPDATE albums set private='1' where id='$id' ";
$stmt= mysqli_stmt_init($link); 
 if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
  mysqli_stmt_execute($stmt);
 header('Location: profil.php');}
   }

   // pentru a face un album public 
  if( isset($_POST['make-public'])){  
$id = $_GET['id'];
$album =  $_GET['album'];
$sql = "UPDATE albums set private='0' where id='$id' ";
$stmt= mysqli_stmt_init($link); 
 if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
 mysqli_stmt_execute($stmt);
 header('Location: profil.php');}
   }
?>