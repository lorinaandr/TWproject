<?php 
 require_once 'config.php';
 if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }
  if(isset($_POST['submit-search'])){
                      $search  = mysqli_real_escape_string($link,$_POST['search']);
                        $sqlUser= "SELECT * FROM useri WHERE nume LIKE '%$search%' OR prenume LIKE '%$search%' OR email LIKE '%$search%' ";
                       $resultUser= mysqli_query($link,$sqlUser);
                       $queryResultUser= mysqli_num_rows($resultUser);
                       if($queryResultUser > 0) {
                        if ($queryResultUser == 1) { echo" S-a găsit ".$queryResultUser." rezultat.";
                      }else {
                        echo" S-au găsit ".$queryResultUser." rezultate.";
                      }
                        while($row = mysqli_fetch_assoc($resultUser) ){
                          $_SESSION['numeAltUser'] = $row['nume'];
                          $_SESSION['prenumeAltUser'] = $row['prenume'];
                            $_SESSION['idAltUser'] = $row['id'];
                          echo "<a href='profil-alt-user.php?id=".$row['id']."'' ><div class='article-box' >
                          <img class='search-img-user' alt='profil' src='../projectTW/profil/".$row['image']."'>
                          <p class='search-user'>".$row['nume'].' '.$row['prenume']."</p>
                          </div> ";

                        }

                       }else{
                        $sql= "SELECT * FROM articole WHERE nume_articol LIKE '%$search%' OR text_articol LIKE '%$search%'  OR tip LIKE '%$search%' ";
                      $result = mysqli_query($link,$sql);
                      $queryResult = mysqli_num_rows($result);
                      
                       if($queryResult > 0) {
                        if ($queryResult == 1) { echo" S-a găsit ".$queryResult." rezultat.";
                      }else {
                        echo" S-au găsit ".$queryResult." rezultate.";
                      }
                        while($row = mysqli_fetch_assoc($result) ){
                          echo "<a href='".$row['page']."' ><div class='article-box' >
                          <p>".$row['nume_articol']."</p>
                          <p>".$row['descriere']."</p>
                          <p>".$row['data_articol']."</p> 
                          </div> ";
                          }
                         }else {
                        echo "Nu am gasit rezultate. ";
                       }
                       }                      
                     }                                          
                   

?>