<?php
 require_once 'config.php';
  $id=  $_SESSION['id'];
    $q = mysqli_query($link,"SELECT * FROM useri where id = '$id'");
            if($row = mysqli_fetch_assoc($q)){
            
               echo "<img class='img-containerprofil' alt='profil' src='../projectTW/profil/".$row['image']."'> ";
            }  
 ?> 