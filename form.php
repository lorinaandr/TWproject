<?php

require_once "config.php";
// Functions to filter user inputs
function filterName($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING); //Remove all HTML tags from a string
    // Validate user name
    if(filter_var($field, FILTER_VALIDATE_REGEXP, array("options"=>array("regexp"=>"/^[a-zA-Z\s]+$/")))){
        return $field;
    } else{
        return FALSE;
    }
}  
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

$numeErr = $prenumeErr = $emailErr = $parolaErr = $confirmareparolaErr = $securitateErr = $raspunsErr =  "";
$nume = $prenume = $email = $parola = $confirmareparola = $securitate =  $raspuns = "";
// Procesam datele formularului
if($_SERVER["REQUEST_METHOD"] == "POST"){
// Validam numele
    if(empty($_POST["nume"])){
        $numeErr = "Va rugam sa introduceti numele dumneavoastra.";
    } else{
        $nume = filterName($_POST["nume"]);
        if($nume == FALSE){
            $numeErr = "Numele introdus nu este valid.";
        }
    }
//Validam prenumele
      if(empty($_POST["prenume"])){
        $prenumeErr = "Va rugam sa introduceti prenumele dumneavoastra.";
    } else{
        $prenume = filterName($_POST["prenume"]);
        if($prenume == FALSE){
            $prenumeErr = "Prenumele introdus nu este valid.";
        }
    }
//Validam adresa de email
    if(empty($_POST["e-mail"])){
        $emailErr = "Va rugam sa introduceti adresa de email.";     
    } else{
        $email = filterEmail($_POST["e-mail"]);
        if($email == FALSE){
            $emailErr = "Adresa introdusa nu este valida.";
        }
    }
//Validam parola
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
//Validam intrebare de securitate
 if(empty(trim($_POST["securitate"]))){
        $securitateErr = "Va rugam sa alegeti o intrebare.";     
    } 
    //Validam raspunsul
 if(empty(trim($_POST["raspuns"]))){
        $raspunsErr = "Trebuie sa rapundeti la intrebare.";     
    } 

   // verificam sa vedem daca avem erori inainte de a introduce in baza de date
    if(empty($numeErr) && empty($prenumeErr) && empty($emailErr) && empty($parolaErr)&& empty($confirmareparolaErr) && empty($securitateErr) && empty($raspunsErr)){
        
 $nume = mysqli_real_escape_string($link, $_POST['nume']);
$prenume = mysqli_real_escape_string($link, $_POST['prenume']);
$email = mysqli_real_escape_string($link, $_POST['e-mail']);
$parola = mysqli_real_escape_string($link, $_POST['parola']);
$securitate = mysqli_real_escape_string($link,$_POST['securitate']);
$raspuns = mysqli_real_escape_string($link, $_POST['raspuns']);

  $parola=password_hash($parola, PASSWORD_DEFAULT); 
$image = "profile.jpg";
// Attempt insert query execution
$sql = "INSERT INTO useri (nume, prenume, email, parola,image,intrebare,raspuns) VALUES (?, ?, ?,?,?,?,?)";

if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "sssssss", $nume,$prenume,$email,$parola,$image,$securitate,$raspuns);
if(mysqli_stmt_execute($stmt)){
     header("location: autentifMsg.html");
} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
} }

// Close connection
mysqli_close($link);

        }
}

         ?>
