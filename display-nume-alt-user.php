<?php  require_once 'config.php';
              $q = mysqli_query($link,"SELECT * FROM useri where id = '$id'");
              echo $row['prenume'].' '.$row['nume']; ?>