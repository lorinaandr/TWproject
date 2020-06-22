<?php 
 require_once 'config.php';
 
if(isset($_POST['cautare-multicriteriala'])){
$tip  = mysqli_real_escape_string($link,$_POST['tip-planta']);
$culoare  = mysqli_real_escape_string($link,$_POST['culoare']);
$zona  = mysqli_real_escape_string($link,$_POST['zona']);
$cauta = mysqli_real_escape_string($link,$_POST['cauta']);

if(strlen($_POST['cauta']) >0) {
      $sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$cauta%' ;";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }

}else{
 if(isset($_POST['zona']) and isset($_POST['tip-planta']) and isset($_POST['culoare']) ){


$sql= "SELECT * FROM albums WHERE private=0 and (name LIKE '%$zona%' and name LIKE '%$tip%' and name LIKE '%$culoare%');";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";
                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }


} else{
   if(isset($_POST['tip-planta']) and isset($_POST['culoare']) ) {
$sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$tip%' and name LIKE '%$culoare%' ;";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }


} else {
 if(isset($_POST['tip-planta']) and isset($_POST['zona']) ) {
$sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$tip%' and name LIKE '%$zona%' ;";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }



}else {
  if(isset($_POST['culoare']) and isset($_POST['zona']) ) {
$sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$culoare%' and name LIKE '%$zona%' ;";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }



}else {
  if(isset($_POST['culoare'])) {
$sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$culoare%' ";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }

  }else {
    if(isset($_POST['tip-planta'])) {
    $sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$tip%' ;";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }
   }else{
    if(isset($_POST['zona'])) {
      $sql= "SELECT * FROM albums WHERE private=0 and name LIKE '%$zona%' ;";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat."; echo "<br>";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                        echo "<br>";
                      } 
                        while($row = mysqli_fetch_assoc($result) ){
                            echo "<div class='responsive-album'>";
                           echo "<div class='gallery'>";
                          echo "<div class='desc'> ".$row['name']." </div>";
                          echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
                         echo "<img src='../projectTW/gallery/".$row['file']. "' ";
                          echo "</a>";
                           echo "</a>";
                       echo "<div class='desc'> </div>";
                        echo "</div>";
                        echo "</div>";


                         }
                   }else {
                        echo "Nu am gasit rezultate. "; }
                      } 
}
}
   }

 } } } }  }

?>