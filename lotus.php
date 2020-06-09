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
                <h1 class="titlu-plante"> Lotus, Nelumbo nucifera sau Nufar termal </h1>
								<img  class= "img-container" alt="Lotus" src="../projectTW/img/lotus.jpg">
                
              <p class="detalii">Floarea de Lotus de la origini pana azi  </p>
               <p> Niste vechi savanti egipteni au observat ca floarea de lotus in timpul noptii duce o viata cu totul diferita. In timpul noptii floarea de lotus se inchide si planta trage si tine floarea in apa pe parcursul noptii.

Asa a aparut asocierea pentru floarea de lotus cu renasterea si Soarele. In esenta, floarea de lotus sta inflorita cam trei zile, intrun iaz. Infloreste dimineata pana dupa-amiaza, cu programul de culcare seara!

Se poate considera ca simbolul floare de lotus are diferite intelesuri in diferitele culturi ale lumii, dar in esenta toate au multe similitudini.</p>
             
              <p class="detalii">Floarea Spiritualitatii, semnificatii si beneficii aduse conditiei umane</p>
               <p>Asa cum am zis in introducere legat de semnificatia florii de lotus, aceasta planta este asociata cu renasterea!  Aceasta simbolistica este o consecinta a retragerii in apa, noaptea, si reaparitia florii de lotus dimineata, a doua zi. Este asociata si cu Soarele, pentru ca si el dispare de pe cer noapte, si renaste ziua. Prin urmare, floarea de lotus a ajuns sa simbolizeze Soarele si creatia. In multe hieroglife, apare o floare de lotus alaturi de aparitia lui Nun (apa primordiala) care il poarta pe ea pe Zeul Soarelui.</p>

              <p class="detalii">Lotusul – Simbolistica, traditie, mituri si legende</p> 
              <p>Lotusul este in principiu utilizat pentru a simboliza bucuria, armonia, pacea, puritatea si sinceritatea. Lotusul este floarea dedicata lui Buddha si altor nenumarate divinitati. Lotusul se ridica deasupra apei din lacuri si infloreste creand o puternica senzatie de armonie in mediul inconjurator. Cand s-a nascut Buddha, lotusul a creat un drum pe care sa paseasca acesta, ceea ce il face o floare a paradisului.

Lotusul este de asemenea foarte pretuit de Taoisti si este emblema lui Ho Hsien Ku, zeita care se numara printre Cei Opt Nemuritori din Taoism si care este reprezentata tinand in mana un lotus. Ea foloseste lotusul pentru a ne binecuvanta cu frumusete si noroc in dragoste.

Lotusul este de asemenea un simbol al dragostei de familie, prieteni si asociati. Lotusul este cea mai buna forma de simbol feng shui pentru emisia de energie pozitiva chi, energie care aduce o minte clara si impacata celor care si-au propus teluri marete si sunt hotarati sa le realizeze. Reflectia luminii prin intermediul florii de lotus sporeste chiar si mai mult capacitatea simbolului de a emite energie pozitiva chi si de a anula energiile negative.

Lotusul semnifica, dintre toate tipurile de flori, puritatea suprema si perfectiunea deoarece se ridica gratios din pamantul ud, mai frumoasa decat orice. Fiecare parte a acestei plante, de la radacina pana la petale, are calitati tamaduitoare. Din punct de vedere ezoteric, floarea de lotus ne încarca spiritual si ne ofera splendoare exterioara, aratandu-ne adevarata fata a realitatii. Floarea de lotus exprima bucurie, puritate.</p>
<div class="scroll-left">
         <div class="inner">
             <div class="col col1">
               <img src="../projectTW/img/lotus1.jpg" alt="Lotus">
               <img src="../projectTW/img/lotus2.jpg" alt="Lotus">
               <img src="../projectTW/img/lotus3.jpg" alt="Lotus">
               <img src="../projectTW/img/lotus4.jpg" alt="Lotus">
               <img src="../projectTW/img/lotus5.jpg" alt="Lotus">
               <img src="../projectTW/img/lotus6.jpg" alt="Lotus">
               <img src="../projectTW/img/lotus7.jpg" alt="Lotus">
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
