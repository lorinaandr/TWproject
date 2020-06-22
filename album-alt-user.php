        <?php
    require_once 'config.php';
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
      echo "<a href='../projectTW/gallery/".$row['file']."'>";
        echo "<img src='../projectTW/gallery/".$row['file']. "' alt='".$row['filetitle']."' title='".$row['filetitle']."'>";
        echo "</a>";
        echo "<div class='desc'> ".$row['filedesc']." </div>";
        echo "</div>";
      echo "</div>";
    }
  }
  $album = " SELECT * FROM albums where id_user = '$id' and private = 0";
 $stmt= mysqli_stmt_init($link); 
 if(!mysqli_stmt_prepare($stmt,$album)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $result= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($result)) { 
echo "<div class='responsive-album'>";
      echo "<div class='gallery'>";
      echo "<div class='desc'> ".$row['name']." </div>";
      echo "<a href='profil-alt-user-album.php?name=".$row['name']."&id_user=".$row['id_user']."'>";
        echo "<img src='../projectTW/gallery/".$row['file']. "' ";
        echo "</a>";
       echo "<div class='desc'> </div>";
        echo "</div>";
      echo "</div>";
   } } 


  mysqli_close($link);
  ?>