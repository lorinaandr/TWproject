<?php
session_start(); 

require_once "config.php";
  $email = $password =  "";
  $emailErr = $passwordErr =  "";
  $id = $nume =$prenume ="";
  $hashed_password = "";
   $result = "";
if($_SERVER["REQUEST_METHOD"] == "POST"){ 

      
    // Data sanitization to prevent SQL injection 
    $email = mysqli_real_escape_string($link, $_POST['e-mail']); 
    $password = mysqli_real_escape_string($link, $_POST['password']); 
   
    // afisam o eroare daca fieldurile nu au fost completate
    if (empty($email)) { 
       $emailErr = "Introduceti adresa de e-mail.";     
    } 
    if (empty($password)) { 
         $passwordErr = "Introduceti parola pentru a va conecta.";    
    } 
   
    // verificam daca sunt erori sau nu
    if (empty($emailErr) && empty($passwordErr)) { 
          
          $sql = "SELECT id,nume,prenume, email, parola FROM useri WHERE email=? ";
        $stmt=mysqli_stmt_init($link);
                 if(mysqli_stmt_prepare($stmt, $sql)){
            
           mysqli_stmt_bind_param($stmt, "s", $email);
          
                mysqli_stmt_execute($stmt);
              
                    if($row = mysqli_fetch_assoc(mysqli_stmt_get_result($stmt))){
                       
                       if(password_verify($_POST['password'],$row['parola'] )){
                            // daca parola e corecta, pornim o noua sesiune
                           
                  session_start();
                 $_SESSION['loggedin'] = true;
            $_SESSION['id'] = $row['id'];
            $_SESSION['email'] = $row['email'];
            $_SESSION['nume'] = $row['nume'];
             $_SESSION['prenume'] = $row['prenume'];
            header('location: homepage.php'); 
              }
            else { 
             $passwordErr = "Parola incorecta.";
        } 
      }
      else {
        $passwordErr = "Adresa de e-mail gresita.";
      }
      mysqli_stmt_close($stmt);
       

            
        }  
    } 
mysqli_close($link);
} 
   
?> 
