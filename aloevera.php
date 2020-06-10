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
                <h1 class="titlu-plante"> Aloe vera (Aloe Barbadensis), 7 beneficii nebanuite </h1>
								<img  class= "img-container" alt="Aloe Vera" src="../projectTW/img/aloe2.jpg">
               
								<p> Aloe vera, numita si Planta Nemuririi, are numeroase beneficii pentru sanatate si e folosita in cosmetica pentru piele si par. Cu o ingrijire corespunzatoare, Aloe Vera poate fi crescuta in ghiveci, in propria casa. Aloe vera este o planta care, in frunzele sale groase, are o substanta asemanatoare gelului. Acest gel de aloe vera se foloseste intr-o multime de tratamente pentru piele si par, dar are si alte beneficii asupra sanatatii organismului. Aloe vera a fost folosita de secole pentru proprietatile sale de vindecare si, in antichitate, era numita Planta Nemuririi. Planta de aloe vera se gaseste in intreaga lume, iar multi oameni o cresc in propriile case, in ghiveci. Acestea rezista foarte bine daca au parte de o ingrijire corespunzatoare.</p>
               <p>Gelul de aloe vera are efect de racorire si de calmare atunci cand este aplicat pe piele, motiv pentru care este uneori utilizat pentru a trata arsurile si ranile cutanate. Planta de aloe vera este folosita in tratamene cosmetice pentru piele si par, dar are si alte beneficii mai putin stiute:</p>

<p class="detalii">Calmeaza mancarimile si reduce matreata</p> 
<p> Dermatita seboreica este termenul clinic pentru afectiunea numita matreata. Simptomele unui scalp cu mancarimi si pielea iritata pot fi tratate cu aloe vera. Un studiu din 1998 a constatat ca aloe vera a ajutat la rezolvarea inflamatiei scalpului cauzata de matreata. Acizii grasi gasiti in planta de aloe au proprietati antiinflamatorii.</p>



<p class="detalii">Aloe vera vindeca rapid arsurile solare</p> 
<p> Potrivit studiilor, vindecarea cauzata de arsurile solare au fost cu 8 zile mai scurta atunci cand au fost utilizata aloe vera. Gelul acesteia are prorietati cicatrizante si regenerante pentru piele. </p>

<p class="detalii">Tratament impotriva aftelor bucale</p> 
<p>Mai multe studii au demonstrat ca aloe vera accelereaza procesul de vindecare. Un studiu publicat in Dental Research Journal a aratat ca pacientii care au aplicat gel cu aloe pe aftele din gura s-au vindecat mai repede, iar durerea a fost mai mica comparativ cu pacientii care nu au primit acelasi tratament. </p>

<p class="detalii">Aloe vera in detoxifiere</p>  
<p>Daca vrei sa-ti detoxifiezi organismul, aloe este cel mai natural mijloc prin care poti obtine acest lucru. Mineralele din aloe vera iti curata organismul de substantele ajunge in el din cauza stresului si poluarii. </p>

<p class="detalii">Aloe vera pentru imbunatatirea digestiei</p> 
<p> 
O digestie sanatoasa este cheia absorbtiei tuturor nutrientilor si mineralelor pe care le luam din mancare. De asemenea, aloe ajuta la absorbtia corespunzatoare a proteinelor, ajutand la echilibrarea tranzaitului intestinal. </p>

<p class="detalii">Aloe vera, sursa de colagen.</p> 
<p>
Exista dovezi care arata ca planta poate incetini imbatranirea pielii. Un studiu publicat in Annals of Dermatology au arata ca dupa 90 de zile in care subiectii, femei peste 45 de ani, au primit doua doze de aloe pe zi (1,200 mg/d si 3,600 mg/d), ridurile faciale s-au estompat, iar elasticitatea pielii s-a imbunatatit.</p>

<p class="detalii">Hidrateaza pielea </p>
<p>Aloe are proprietati de hidratare a pielii, pastrand-o elastica, sanatoasa si stralucitoare. Planta aloe este perfecta pentru tenul gras, pentru ca o hraneste fara sa o incarce. De asemenea, aloe vera contribuie la echilibrarea nivelului ph-ului pielii. </p>

<p class="detalii">Ingrijire aloe vera in ghiveci </p>
<p>Dincolo de beneficii Aloe este o foarte frumoasa planta de apartament ideala pentru decorarea casei. Ingrijire aloe vera - Planta poate ajunge la circa un metru inaltime si are nevoie de un loc luminos cu acces la razele directe ale soarelui, ferit de curenti de aer. Aloe Vera nu face fata la temperaturi negative, asa ca iarna nu poate sta decat in locuri incalzite. Temperatura minima la care rezista este de 5-8 grade Celsius. </p>
      <div class="scroll-left">
         <div class="inner">
             <div class="col">
               <img src="../projectTW/img/aloe1.jpg" alt="Aloe-Vera">
               <img src="../projectTW/img/unnamed.png" alt="Aloe-Vera">
               <img src="../projectTW/img/aloe3.jpg" alt="Aloe-Vera">
               <img src="../projectTW/img/aloe4.jpg" alt="Aloe-Vera">
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
