 <?php
    require_once 'config.php';
    $sql =  " SELECT * FROM ierbar where id_user = ? and album=? and filedesc !='' order by id desc; ";
 $stmt= mysqli_stmt_init($link); 
if($stmt = mysqli_prepare($link, $sql)){
    mysqli_stmt_bind_param($stmt, "is",$id,$album_name);
if(mysqli_stmt_execute($stmt)){
     $results= mysqli_stmt_get_result($stmt);
         echo "<h1 class='titlu-album'>".$album_name." </h1>";
   while ($row = mysqli_fetch_assoc($results)) {
      echo "<div class='responsive-album'>";
       echo "<div class='hide1'>";
        echo "<form action='delete-images.php?album=".$row['album']."&id=".$row['id']."&file=".$row['file']."'' method='POST'>";
         echo "  <button type='submit' name='elimina-poza'>Elimina</button> ";
          echo"</form>";
           echo "</div>";
      echo "<div class='gallery'>";
        echo "<img src='../projectTW/albums/".$album_name."/".$row['file']. "' alt='".$row['filetitle']."' title='".$row['filetitle']."'>";
        echo "  <button id='sterge-poza' type='submit' name='sterge-poza'  onclick='delete_image(".$row['id'].")'>Sterge</button> ";
        echo "<div class='desc'> ".$row['filedesc']." </div>";
          echo "<div class='hide'>";
        echo "<form action='delete-images.php?id=".$row['id']."&file=".$row['file']."&alb=".$row['album']."' ' method='POST'>";
        echo " <label  class='hide' for='albums'>Muta in:</label>
              <select class='hide' name='albums' id='albums'> ";
             $sql = "SELECT * from albums where id_user=?";
            $stmt= mysqli_stmt_init($link); 
             if($stmt = mysqli_prepare($link, $sql)){
             mysqli_stmt_bind_param($stmt, "i",$id);
             if(mysqli_stmt_execute($stmt)){
                $result= mysqli_stmt_get_result($stmt);
              while ($row = mysqli_fetch_assoc($result)) { 
           echo"<option value='".$row['name']."'>".$row['name']."</option>";} }
           echo"</select> ";
              echo "  <button type='submit' name='album-in-album'>Muta</button> ";
        echo"</form>";
          echo "</div>";
        echo "</div>";
      echo "</div>";}
    }
  } }
  mysqli_close($link);
  ?>
