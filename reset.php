<?php
session_start();
require_once "config.php";

   if(isset($_SESSION['id'] )){
  $id = true;}
else{
  $id=false; }
 $msg = "";
   if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }

function filterEmail($field){
    // Sanitize e-mail address - sterge caracterele care nu pot fi intr-un email address
    $field = filter_var(trim($field), FILTER_SANITIZE_EMAIL); 
    
    // Validate e-mail address
    if(filter_var($field, FILTER_VALIDATE_EMAIL)){
        return $field;
    } else{
        return FALSE;
    }
}
$emailErr = $parolaErr = $confirmareparolaErr = $securitateErr = $raspunsErr =  "";
 $email = $parola = $confirmareparola =  $securitate =  $raspuns = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){ 
  //Validam adresa de email
    if(empty($_POST["email"])){
        $emailErr = "Va rugam sa introduceti adresa de email.";     
    } else{
        $email = filterEmail($_POST["email"]);
        if($email == FALSE){
            $emailErr = "Adresa introdusa nu este valida.";
        }
    }
//Validam noua parola
 if(empty(trim($_POST["parola"]))){
        $parolaErr = "Va rugam sa introduceti o parola.";     
    } elseif(strlen(trim($_POST["parola"])) < 6){
        $parolaErr = "Parola trebuie sa contina cel putin 6 caractere.";
    } else{
        $parola = trim($_POST["parola"]);
    }
// Validam parola confirmata
    if(empty(trim($_POST["confirmareparola"]))){
        $confirmareparolaErr = "Va rugam confirmati parola.";     
    } else{
        $confirmareparola = trim($_POST["confirmareparola"]);
        if(empty($parolaErr) && ($parola != $confirmareparola)){
            $confirmareparolaErr = "Confirmarea parolei a esuat.";
        }

}
$query = "SELECT * from useri where email = '$email' ";
$stmt1= mysqli_stmt_init($link); 
    if(!mysqli_stmt_prepare($stmt1,$query)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt1);
     $results= mysqli_stmt_get_result($stmt1);
   while ($row = mysqli_fetch_assoc($results)) {
//Validam intrebare de securitate
 if(empty(trim($_POST["securitate"]))){
        $securitateErr = "Va rugam sa alegeti o intrebare.";     
    } else{
        if($_POST["securitate"] != $row['intrebare']) {
            $securitateErr = "Intrebare gresita.";   
        }
    }
    //Validam raspunsul
 if(empty(trim($_POST["raspuns"]))){
        $raspunsErr = "Trebuie sa rapundeti la intrebare.";     
    } else{
        if($_POST["raspuns"] != $row['raspuns']) {
            $raspunsErr = "Raspuns gresit.";   
        }
    }

} }
    if(empty($emailErr) && empty($parolaErr) && empty($confirmareparolaErr) && empty($securitateErr) && empty($raspunsErr)){
        $email = mysqli_real_escape_string($link, $_POST['email']);
$parola = mysqli_real_escape_string($link, $_POST['parola']);
        // Prepare an update statement
        $sql = "UPDATE useri SET parola = ? WHERE email = '$email' ";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "s", $param_password);
            
            // Set parameters
            $param_password = password_hash($parola, PASSWORD_DEFAULT);
            if(mysqli_stmt_execute($stmt)){
                $msg = "Parola schimbata cu succes.";
            } else{
                $msg =  "A aparut o eroare la schimbarea parolei.";
            }

            
            mysqli_stmt_close($stmt);
        }
    }
    
    
    mysqli_close($link);

  }


?>