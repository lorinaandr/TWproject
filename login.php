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
            header('location: homepage1.html'); 
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
                  <div class="titleMiddle">Autentificare</div>
                  <form class="formular" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="input">
                     <label>E-mail</label>
                     <input class="form1" type="text" name="e-mail"  >
                      <span class="error"><br><?php echo $emailErr; ?></span>
                    </div>
                    <div class="input">
                      <label>Parola</label>
                      <input class="form1" type="password" name="password" >
                      <span class="error"> <br><?php echo $passwordErr; ?></span>
                    </div>
                    <div class="button">
                    <input type="submit" name="register" value="Autentificare">
                    </div>
                      </form>
                    <div class="button" onclick='location.href="autentification.php"'>
                    <input  type="submit" name="register" value="Inregistrare">
                    </div>
                    <p> Ai uitat parola? <a href="pwreset.php">Click aici </a> </p>
                
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
