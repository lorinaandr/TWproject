<?php
    require_once 'config.php';
    $album = " SELECT * FROM albums where id_user = '$id'";
 $stmt= mysqli_stmt_init($link); 

    if(!mysqli_stmt_prepare($stmt,$album)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $result= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($result)) { 
 echo "<div class='responsive-album'>";
      echo "<div class='gallery'>";
              echo "<form action='delete-images.php?album=".$row['name']."&id=".$row['id']."' method='POST'>";
              if($row['private'] == 0){
        echo "  <button type='submit' name='make-private'>Acest album este public</button> ";}
        else{
          echo"<button type='submit' name='make-public'>Acest album este privat</button> ";
        }
        echo"</form>";
      echo "<div class='desc'> ".$row['name']." </div>";
      echo "<a href='profil-album.php?id=".$row['id']."'>";
        echo "<img src='../projectTW/gallery/".$row['file']. "' ";
        echo "</a>";
       echo "<form action='delete-images.php?album=".$row['name']."&id=".$row['id']."' method='POST'>";
        echo "  <button type='submit' name='sterge-album' >Sterge</button> ";
      echo"</form>";
       echo "</a>";
       echo "<div class='desc'> </div>";
        echo "</div>";
      echo "</div>";
   } } 

    $sql =  " SELECT * FROM ierbar where id_user = '$id' and album=' ' or filetitle=' ' order by id desc; ";
    $stmt= mysqli_stmt_init($link); 

    if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $results= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($results)) {
      echo "<div class='responsive-album'>";
      echo "<div class='gallery'>";
      echo "<div class='desc'> </div>";
     // echo "<a href='../projectTW/gallery/".$row['file']."'>";
        echo "<img src='../projectTW/gallery/".$row['file']. "' alt='".$row['filetitle']."' title='".$row['filetitle']."'>";
      //  echo "<form action='delete-images.php?album=".$row['album']."&id=".$row['id']."&file=".$row['file']."' method='POST'>";
        echo "  <button id='sterge-poza' type='submit' name='sterge-poza' onclick='delete_image(".$row['id'].")'>Sterge</button> ";
      //  echo"</form>";
       // echo "</a>";
        echo "<div class='desc'> ".$row['filedesc']." </div>";
        echo "<div class='hide'>";
        echo "<form action='delete-images.php?id=".$row['id']."&file=".$row['file']."' method='POST'>";
        echo " <label  class='hide' for='albums'>Muta in:</label>
              <select class='hide' name='albums' id='albums'> ";
             $sql = "SELECT * from albums where id_user='$id'";
             $stmt= mysqli_stmt_init($link); 

            if(!mysqli_stmt_prepare($stmt,$sql)){
              echo "Eroare sql";
               }else{
               mysqli_stmt_execute($stmt);
                $result= mysqli_stmt_get_result($stmt);
              while ($row = mysqli_fetch_assoc($result)) { 
           echo"<option value='".$row['name']."'>".$row['name']."</option>";} }
           echo"</select> ";
              echo "  <button type='submit' name='muta-in-album'>Muta</button> ";
        echo"</form>";
          echo "</div>";
        echo "</div>";
      echo "</div>";
    }
  }
  mysqli_close($link);
  ?>