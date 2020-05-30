<?php

require_once "config.php";
// Functions to filter user inputs
function filterName($field){
    $field = filter_var(trim($field), FILTER_SANITIZE_STRING);
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

$numeErr = $prenumeErr = $emailErr = $parolaErr = $confirmareparolaErr =  "";
$nume = $prenume = $email = $parola = $confirmareparola = "";
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
   // verificam sa vedem daca avem erori inainte de a introduce in baza de date
    if(empty($numeErr) && empty($prenumeErr) && empty($emailErr) && empty($parolaErr)&& empty($confirmareparolaErr)){
        
 $nume = mysqli_real_escape_string($link, $_REQUEST['nume']);
$prenume = mysqli_real_escape_string($link, $_REQUEST['prenume']);
$email = mysqli_real_escape_string($link, $_REQUEST['e-mail']);
$parola = mysqli_real_escape_string($link, $_REQUEST['parola']);

  $parola=password_hash($parola, PASSWORD_DEFAULT); 

// Attempt insert query execution
$sql = "INSERT INTO useri (nume, prenume, email, parola) VALUES ('$nume', '$prenume', '$email','$parola')";


if(mysqli_query($link, $sql)){
     header("location: autentifMsg.html");
} else{
    echo "ERROR: Not able to execute $sql. " . mysqli_error($link);
}

// Close connection
mysqli_close($link);

        }
}
         ?>
         
         

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../projectTW/css/style.css">
  <link rel="stylesheet" href="../projectTW/css/responsive.css">
  <link rel="shortcut icon" href="https://www.meetsun.ro/wp-content/themes/MeetSun/images/meet-sun-logo50.png" type="image/x-icon">
  <title>Plantonline</title>  
</head>
<body>
  <header id="masthead" class="site-header">
        <div class="site-branding">
             <h2 class="site-title">
               <a href="homepage.html" rel="home"> Plantonline </a>
              </h2>
              <div class="site-description"> Descopera lumea plantelor </div>
        </div>
      <div class="navbar">
        <nav>
           <ul class="responsive-menu">
           
              <ul class="responsive">
              <li class="lista"><a href="homepage.php"><i class="fa fa-home"></i> </a> </li>
          <li class="lista"><a href="#"><i class="fa fa-bars"></i> </a>
                   <ul class="dropdown-content">
                          <li class="med"><a href="#">Plante medicinale </a>
                            <ul class="subMeniu1">
                              <li><a href="aloevera.php">Aloe vera</a></li> 
                              <li><a href="pelin.php">Pelin</a></li>
                              <li><a href="ricin.php">Ricin</a></li>
                              <li><a href="galbenele.php">Galbenele</a></li>
                            </ul>
                           </li>
                          <li class="exo"><a href="#"> Plante exotice </a>
                            <ul class="subMeniu2">
                              <li><a href="orhidee.php">Orhidee</a></li>
                              <li><a href="lotus.php">Lotus</a></li>
                            </ul>
                          </li>
                          <li class="mnt"><a href="#">Plante montane</a>
                            <ul class="subMeniu3">
                               <li><a href="floare-de-colt.php">Floare de colt</a></li>
                               <li><a href="brandusa-de-munte.php">Brandusa de munte</a></li>
                               <li><a href="sisinei-de-munte.php">Sisinei de munte</a></li>
                            </ul>
                          </li>
                     </ul> 
         </li>
          <li class="lista"> <a href="login.php"><i class="fa fa-sign-in"></i></a> </li>
          <li class="lista"> <a href="statistici.html"><i class="fa fa-file-text-o"></i></a> </li>
          <li class="search-container">
            <input class="search" type="text" placeholder="Search..." name="search">
            <button class="searchbtn" type="submit"><i class="fa fa-search"></i></button>
          </li></ul> </ul> 
                 
        <ul class="menu">
          <li class="lista"><a href="homepage.php">Acasa</a> </li>
          <li class="lista"><a href="#">Meniu </a>
                   <ul class="dropdown-content">
                          <li class="med"><a href="#">Plante medicinale </a>
                            <ul class="subMeniu1">
                              <li><a href="aloevera.php">Aloe vera</a></li> 
                              <li><a href="pelin.php">Pelin</a></li>
                              <li><a href="ricin.php">Ricin</a></li>
                              <li><a href="galbenele.php">Galbenele</a></li>
                            </ul>
                           </li>
                          <li class="exo"><a href="#"> Plante exotice </a>
                            <ul class="subMeniu2">
                              <li><a href="orhidee.php">Orhidee</a></li>
                              <li><a href="lotus.php">Lotus</a></li>
                            </ul>
                          </li>
                          <li class="mnt"><a href="#">Plante montane</a>
                            <ul class="subMeniu3">
                               <li><a href="floare-de-colt.php">Floare de colt</a></li>
                               <li><a href="brandusa-de-munte.php">Brandusa de munte</a></li>
                               <li><a href="sisinei-de-munte.php">Sisinei de munte</a></li>
                            </ul>
                          </li>
                     </ul> 
         </li>
          <li class="lista"> <a href="login.php">Login</a> </li>
          <li class="lista"> <a href="statistici.html">Statistici</a> </li>
          <li class="search-container">
            <input class="search" type="text" placeholder="Search..." name="search">
            <button class="searchbtn" type="submit"><i class="fa fa-search"></i></button>
          </li>
      </ul>
     </nav>
    </div>
    </header>
  <div class="wrapper">
    <main class="d-flex-row">
        <div class="content1 d-flex-row">
          <div class="main">
            <div class="container">
                <div class="formularAuth">
                  <div class="titleMiddle">Inregistrare</div>
                  <form class="formular" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="input">
                       <p><span class = "error">* required field.</span></p>
                      <label>Nume</label>
                      <input class="form1" type="text" name="nume" value="<?php echo $nume; ?>"> 
                      <span class="error">*  <br><?php echo $numeErr; ?> </span></div>
                    <div class="input">
                      <label>Prenume</label>
                      <input class="form1" type="text" name="prenume" value="<?php echo $prenume; ?>">  
                      <span class="error">* <br><?php echo $prenumeErr; ?></span></div>
                    <div class="input">
                     <label>Adresa de e-mail</label>
                     <input class="form1" type="text" name="e-mail" value="<?php echo $email; ?>">
                     <span class="error">* <br><?php echo $emailErr; ?></span></div>
                    <div class="input">
                      <label>Parola</label>
                      <input class="form1" type="password" name="parola" value="<?php echo $parola; ?>">
                     <span class="error">*<br><?php echo $parolaErr; ?></span></div>
                    <div class="input">
                      <label>Confirmare parola</label>
                      <input class="form1" type="password" name="confirmareparola" value="<?php echo $confirmareparola; ?>">
                       <span class="error">*<br><?php echo $confirmareparolaErr; ?></span></div>
                    </div>

                                      
                   <div class="button">
                    <input type="submit" name="register" value="Inregistrare">
                    </div>
                     </form>

                </div>
                
             </div>
             
          </div> 

  </div>
 
      </main>

    </div>

<div id="footer">
        
        <div class="copyright">
            Copyright - Website &copy; 2020
        </div>
</div>
</body>
</html>
