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
                <h1 class="titlu-plante"> Pelin (Artemisia absinthium), planta-medicament care curata tot organismul  </h1>
								<img  class= "img-container" alt="Pelin" src="../projectTW/img/pelin.png">
                <p class="detalii"> Descriere </p>
								<p> Pelinul este un arbust peren si aromat, cu frunze verzi-cenusii acoperite de perisori albi si matasosi. Inflorescentele mici si galbene apar vara si toamna, in manunchiuri. Planta de gradina foarte populara in multe parti ale lumii, pelinul este originar din Europa, Asia si Africa. Creste adesea pe terenurile virane si pe marginea drumurilor. Frunzele, tulpinile si florile se usuca si sunt folosite la prepararea de infuzii si tincturi. Pelinul este una dintre cele mai amare plante cunoscute si se foloseste in doze foarte mici la prepararea unor bauturi alcoolice precum absintul si vermutul.</p>
               <p class="detalii">Actiune</p>
               <p>Indicat in afectiunile hepatice si diabetice, datorita calitatilor sale depurative, pelinul se bucura de aprecieri si cand vine vorba de alte alte afectiuni, de edeme renale pana la gastrite. Iar calitatile sale terapeutice il recomanda inclusiv pentru cresterea rezistentei organismului impotriva bolilor virale. Are insa si contraindicatii, asa ca ar trebui sa-l folosim doar in cunostinta de cauza.Este un tonic amar, emanagog si antihelmitic, colagog, antibacterian, antiseptic, schizoticid. La proprietatile amare ale pelinului trebuie amintit si un efect colotrop, stimularea functionalitatii vezicii biliare, ceea ce contribuie la imbunatatirea starii generale. Calitatile pelinului (pelinul alb) sunt date de principiile sale amare (absintina, artabsina, anabsintina, etc), ulei volatil, vitaminele B6 si C, substante de natura carotenoidica, fitosteroli, lactone, acizi organici, si nu numai.</p>
              <p class="detalii">Administrare </p>
               <p> Cea mai la indemana de preparat este infuzia de pelin. „Avem nevoie de una-doua lingurite de frunze uscate, la o cana de apa clocotita. Se recomanda consumul a doua ceaiuri pe zi, inainte de mese, pentru stimularea poftei de mancare sau dupa mese, pentru alte afectiuni din randul celor amintite”, spune Elena Badea. Un alt produs fitoterapeutic, pe care putem sa-l obtinem acasa este tinctura, preparata din 20 g herba uscata la 100 ml alcool. „Se administreaza cate 15-20 picaturi intr-o infuzie de menta indulcita cu miere de albine, cu 30 minute inainte de mese, ca aperitiv”, recomanda specialistul. Vinul de pelin este un alt produs cu efecte extraordinare pentru sanatate. Avem nevoie de cca 30 g varfuri inflorite care se pun la macerat intr-un litru de vin alb. Se consuma ca aperitiv si tonic, cate un paharel inainte de mese sau ca digestiv, dupa mese. Dintre produsele pe baza de pelin mai trebuie amintite pulberea din frunze uscate, recunoscuta pentru efectele sale febrifuge si vermifuge si siropul digestiv si vermifug (pregarat din 150 g varfuri inflorite la 1000 ml apa fiarta si 500 g miere). Pelinul si-a demonstrat calitatile terapeutice si in uz extern, putand fi folosit in bai locale, dar si sub forma de comprese cu decoct pentru tratarea ranilor greu vindecabile, ulceratii ale pielii si intepaturi de insecte, precum si sub forma de cataplasme puse pe luxatii si umflaturi. </p>
           <div class="scroll-left">
         <div class="inner">
             <div class="col col1">
               <img src="../projectTW/img/pelin1.jpg" alt="Pelin">
               <img src="../projectTW/img/pelin2.jpg" alt="Pelin">
               <img src="../projectTW/img/pelin3.jpg" alt="Pelin">
               <img src="../projectTW/img/pelin4.jpg" alt="Pelin">
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
