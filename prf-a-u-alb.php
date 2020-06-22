 <?php
    require_once 'config.php';
    $id = $_GET['id_user'];
    $albumName= $_GET['name'];
  $sql = " SELECT * FROM ierbar where id_user = '$id' and album = '$albumName';";
 $stmt= mysqli_stmt_init($link); 
  $stmt= mysqli_stmt_init($link); 
    if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $results= mysqli_stmt_get_result($stmt);
          echo "<h1 class='titlu-album'>".$albumName." </h1>";
   while ($row = mysqli_fetch_assoc($results)) {
      echo "<div class='responsive-album'>";
      echo "<div class='gallery'>";
      echo "<a href='../projectTW/albums/".$albumName."/".$row['file']."'>";
        echo "<img src='../projectTW/albums/".$albumName."/".$row['file']. "' alt='".$row['filetitle']."' title='".$row['filetitle']."'>";
        echo "</a>";
        echo "<div class='desc'> ".$row['filedesc']." </div>";
        echo "</div>";
      echo "</div>";
    }
  }


  mysqli_close($link);
  ?>