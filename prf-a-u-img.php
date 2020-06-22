<?php
 require_once 'config.php';
            $q = mysqli_query($link,"SELECT * FROM useri where id = '".$_SESSION['idAltUser']."'");
            if($row = mysqli_fetch_assoc($q)){
               if($row['image'] == ""){
                       
            echo "<img class='img-containerprofil' alt='profil' src='../projectTW/img/profile.jpg'> "; }
            else {
               echo "<img class='img-containerprofil' alt='profil' src='../projectTW/profil/".$row['image']."'> ";
            }  }
            ?> 