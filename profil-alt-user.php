<?php
 require_once 'config.php';
session_start();
$id = $_SESSION['idAltUser'] ;
 $nume = $_SESSION['prenumeAltUser']. ' ' . $_SESSION['numeAltUser'];
   if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }
?>

<!DOCTYPE html>
<html lang="en" >
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
             <?php
         if($log== true){ 
           echo "  <li class='lista'> <a href='profil.php'><i class='fa fa-user'></i></a> </li> ";
           echo "<li class='lista'> <a href='statistici.html'><i class='fa fa-bar-chart'></i></a> </li>"; }
           else {
           echo"  <li class='lista'> <a href='login.php'><i class='fa fa-sign-in'></i></a> </li>";
            echo "<li class='lista'> <a href='autentification.php'><i class='fa fa-file-text-o'></i></a> </li>"; 
                }
          ?>
         <li class="search-container">
            <form action="search.php" method="POST">
            <input class="search" type="text" placeholder="Search..." name="search">
             <button class="searchbtn" type="submit" name="submit-search"><i class="fa fa-search"></i></button>
          </form>
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
           <?php
         if($log== true){ 
           echo " <li class='lista'> <a href='profil.php'>Profil</a> </li> ";
           echo "<li class='lista'> <a href='statistici.html'>Statistici</a> </li>"; }
           else {
           echo" <li class='lista'> <a href='login.php'>Login</a> </li> ";
            echo "<li class='lista'> <a href='autentification.php'>Inregistrare</a> </li>"; 
                }
          ?>
          <li class="search-container">
            <form action="search.php" method="POST">
            <input class="search" type="text" placeholder="Search..." name="search">
             <button class="searchbtn" type="submit" name="submit-search"><i class="fa fa-search"></i></button>
          </form>
          </li>
      </ul>
     </nav>
    </div>
    </header>
  <div class="wrapper">
    <main class="d-flex-row">
        <div class="content d-flex-row">
          <div class="content-profil">
              <form class="profil-user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
           <?php

            $q = mysqli_query($link,"SELECT * FROM useri where id = '".$_SESSION['idAltUser']."'");
            if($row = mysqli_fetch_assoc($q)){
               if($row['image'] == ""){
                       
            echo "<img class='img-containerprofil' alt='profil' src='../projectTW/img/profile.jpg'> "; }
            else {
               echo "<img class='img-containerprofil' alt='profil' src='../projectTW/profil/".$row['image']."'> ";
            }  }
            ?> 
               <div class="bio">
              <h1> <?php echo $nume ?> </h1>
            
               </div>
             </form>
       
        </div>
       </div>

    </main>
     
       
 <section class="album">
        <?php
    require_once 'config.php';
    $sql =  " SELECT * FROM ierbar where id_user = '$id' order by id desc; ";
    $stmt= mysqli_stmt_init($link); 
    if(!mysqli_stmt_prepare($stmt,$sql)){
   echo "Eroare sql";
    }else{
    mysqli_stmt_execute($stmt);
     $results= mysqli_stmt_get_result($stmt);
   while ($row = mysqli_fetch_assoc($results)) {
      echo "<div class='responsive-album'>";
      echo "<div class='gallery'>";
      echo "<a href='../projectTW/gallery/".$row['file']."'>";
        echo "<img src='../projectTW/gallery/".$row['file']. "' alt='".$row['filetitle']."' title='".$row['filetitle']."'>";
        echo "</a>";
        echo "<div class='desc'> ".$row['filedesc']." </div>";
        echo "</div>";
      echo "</div>";
    }
  }
  mysqli_close($link);
  ?>
  </section>
  </div>

    <div id="footer">
        
        <div class="copyright">
            Copyright - Website &copy; 2020
        </div>
</div>
</body>
</html>