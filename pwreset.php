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
$emailErr = $parolaErr = $confirmareparolaErr =  "";
 $parola = $confirmareparola = "";

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
    if(empty($emailErr) && empty($parolaErr) && empty($confirmareparolaErr)){
        // Prepare an update statement
        $sql = "UPDATE useri SET parola = ? WHERE id = ?";
        
        if($stmt = mysqli_prepare($link, $sql)){
            // Bind variables to the prepared statement as parameters
            mysqli_stmt_bind_param($stmt, "si", $param_password, $id);
            
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
             
          <?php
         if($log== true){ 
           echo "  <li class='lista'> <a href='profil.php'><i class='fa fa-user'></i></a> </li> "; }
           else {
           echo"  <li class='lista'> <a href='login.php'><i class='fa fa-sign-in'></i></a> </li>";
                }
          ?>
          <li class="lista"> <a href="statistici.html"><i class="fa fa-file-text-o"></i></a> </li>
          <li class="search-container">
            <input class="search" type="text" placeholder="Search..." name="search">
            <button class="searchbtn" type="submit"><i class="fa fa-search"></i></button>
          </li></ul> </ul> </ul>
                 
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
          <?php
         if($log== true){ 
           echo " <li class='lista'> <a href='profil.php'>Profil</a> </li> "; }
           else {
           echo" <li class='lista'> <a href='login.php'>Login</a> </li> ";
                }
          ?>
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
                  <div class="titleMiddle">Schimbare parola</div>
                  <form class="formular" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="input">
                     <label>E-mail</label>
                     <input class="form1" type="text" name="email"  >
                      <span class="error"><br><?php echo $emailErr; ?></span>
                    </div>
                    <div class="input">
                      <label>Parola noua</label>
                      <input class="form1" type="password" name="parola" >
                      <span class="error"> <br><?php echo $parolaErr; ?></span>
                    </div>
                    <div class="input">
                      <label>Confirmare parola</label>
                      <input class="form1" type="password" name="confirmareparola" >
                      <span class="error"> <br><?php echo $confirmareparolaErr; ?></span>
                    </div>
                    <div class="button">
                    <input type="submit" name="register" value="Salveaza">
                    </div>
                    <span class="error"><?php echo $msg; ?></span>
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
