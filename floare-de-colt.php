<?php 
session_start();
 require_once 'config.php';
 if(isset($_SESSION['loggedin'] )){
  $log = true;}
else{
  $log=false; }
  // pentru a calcula statistici privind paginile accesate
$user_id=$_SESSION['id'];
$page=$_SERVER['PHP_SELF'];
$query_page = "SELECT * from articole where page ='".$page."' ";
$results = mysqli_query($link,$query_page);
if(mysqli_num_rows($results) > 0 ){
  while($row = mysqli_fetch_assoc($results)) {
   $title = $row['nume_articol'];
  }
}
mysqli_query($link,"insert into pageviews values('','$page','$title','$user_id')");

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
               <a href="homepage.php" rel="home"> Plantonline </a>
              </h2>
              <div class="site-description"> Descopera lumea plantelor </div>
        </div>
       <div class="navbar">
        <nav>
          <ul class="responsive-menu">
            <li>
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
           echo "<li class='lista'> <a href='statistici.php'><i class='fa fa-bar-chart'></i></a> </li>"; }
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
          </li></ul> </li></ul> 
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
           echo "<li class='lista'> <a href='statistici.php'>Statistici</a> </li>"; }
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
                <div class="homepage">
                <h1 class="titlu-plante"> Floarea-reginei (Leontopodium alpinum Cass.), numită și floarea-de-colț </h1>
								<img  class= "img-container" alt="Floare-de-colt" src="../projectTW/img/floaredecolt.jpg">
               
								<p>  Este o specie de plante erbacee, perene, din genul Leontopodium Cass., familia Asteraceae.

    Planta este lânat-tomentoasă, înaltă de 5 – 20 cm, cu inflorescențe compuse din capitule, înconjurate de numeroase bractee lungi, alb - argintii, lânos - păroase. Dacă în România planta ajunge doar până la înălțimea de maximum 20 cm, ea poate crește în alte țări până la 50 – 80 cm. Inflorescența este îmbrăcată cu frunze păroase, unele mai mari, altele mai mici și care iau forma unei steluțe.Aceasta este formată până la zece inflorescențe cu numeroase și minuscule flori, încadrate de 5-15 bactee albe, dispuse radiar, ce dau întregului ansamblu înfățișarea unei flori. Planta este acoperită cu peri catifelați, argintii, ce îi conferă o eleganță deosebită. Perioada de înflorire este iulie - august.</p>

<p class="detalii">Habitat</p>  <p>Crește în munți calcaroși, în pajiști de pe versanți abrupți și însoriți sau pe stânci. La noi crește în Munții Carpați, fiind declarată monument al naturii din 1933 și ocrotită. Floarea reginei poate fi întâlnită în Munții Maramureșului și Munții Rodnei, Obcinele Bucovinei, Rarău, Ceahlău, Ciucaș, Munții Bucegi, Făgăraș, Cozia și Retezat. În afara spațiului românesc, floarea reginei înfrumusețează zone din Abruzzi, Alpi, Balcani, Carpați, Pirinei, dar și din Asia Centrală și de Est.</p>


<p class="detalii">Denumiri</p> <p>  Mai este cunoscută și ca Floare-de-colț (denumire introdusă în perioada comunistă) sau cu denumirea germană, Edelweiß.
Conform Dicționarului de sinonime, pentru floarea-reginei (Leontopodium alpinum) există și următoarele denumiri: albumeală, albumiță, floare-de-colț, (rar) edelvais, (reg.) flocoșele (pl.), steluță, floarea-doamnei. </p> 


              <div class="scroll-left">
         <div class="inner">
             <div class="col col1">
               <img src="../projectTW/img/fl-colt.jpg" alt="Floare-de-colț">
               <img src="../projectTW/img/fl-colt1.jpg" alt="Floare-de-colț">
               <img src="../projectTW/img/fl-colt2.jpg" alt="Floare-de-colț">
               <img src="../projectTW/img/fl-colt3.jpg" alt="Floare-de-colț">
               <img src="../projectTW/img/fl-colt4.jpg" alt="Floare-de-colț">
                <img src="../projectTW/img/fl-colt5.jpg" alt="Floare-de-colț">
               <img src="../projectTW/img/fl-colt6.jpg" alt="Floare-de-colț">
              </div>
          </div>
         </div>
             </div>
            </div>

        </main>
        <p class="titlu-art"> Ce au mai parcurs alti cititori... </p>
 <section class="articole">
 
<figure>
  <a href="aloevera.html" class="a-art-3c"> Aloe vera, 7 beneficii nebanuite </a>
        <img src="https://aradbranding.com/trade/wp-content/uploads/2020/01/Aloe-Vera.jpg" alt="Aloe Vera, 7 beneficii nebanuite" class="img-art-3c" title="Aloe Vera, 7 beneficii nebanuite">
      </figure>
      <figure>
        <a href="galbenele.html" class="a-art-3c"> Multiplele efecte terapeutice ale florilor de galbenele</a>
          <img src="../projectTW/img/galbenele1.jpg" alt="Multiplele efecte terapeutice ale florilor de galbenele(Calendula Officinalis)" class="img-art-3c" title="Multiplele efecte terapeutice ale florilor de galbenele">
         
        </figure>
        <figure>
          <a href="pelin.html" class="a-art-3c"> Pelinul, planta-medicament care curata tot organismul </a>
           <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn%3AANd9GcQU_sKiWcJ3IQY9MWNn5PZWDxXCQv8CzRfXcLsaWB8mIdVtChS5" alt="Pelinul (Artemisia absinthium), planta-medicament care curata tot organismul " class="img-art-3c" title="Pelinul (Artemisia absinthium), planta-medicament care curata tot organismul" >
            
          </figure>
  </section>
 </div>
    <div id="footer">

        <div class="copyright">
            Copyright - Website &copy; 2020
        </div>
</div>
</body>
</html>
