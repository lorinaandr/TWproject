<?php 
 require_once 'art.php';
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
                          <li class="mnt"><a href="multicriteriala.php">Cautare multicriteriala</a>
                          </li>
                     </ul> 
         </li>
            <?php
        require_once 'meniu-responsive.php';
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
                          <li class="mnt"><a href="multicriteriala.php">Cautare multicriteriala</a>
                          </li>
                     </ul> 
         </li>
          <?php
         require_once 'meniu-normal.php';
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
                <h1 class="titlu-plante"> Multiplele efecte terapeutice ale florilor de galbenele (Calendula Officinalis) </h1>
                <img  class= "img-container" alt="Galbenele" src="../projectTW/img/galbenele.png">
                <p>Pe langa faptul ca sunt un decor plin de viata, florile de galbenele sunt si o planta cu puternice virtuti terapeutice.  Galbeneaua din gradina (sau de pe pervaz) poate fi folosita in salata, ca ingredient pentru supa, poate calma durerile de ga
Florile de galbenele nu sunt doar plante frumoase de decor, acestea au si o multitudine de virtuti terapeutice. 

Galbenelele isi pot gasi locul intr-o salata sau in supa, pot calma durerile de gat sau pot vindeca o eczema. Desi folosite mai mult ca flori de gradina, galbenelele (Calendula officinalis) au un lung istoric ca plante de uz medicinal si culinar. Egiptenii foloseau galbenelele ca tratament de intinerire, iar grecii antici foloseau petalele aurii pentru a decora si aroma platourile de mancare.

Folosita multa vreme ca planta culinara in Europa, frumoasele petale portocalii dau multa savoare salatelor si sunt folosite in branza sau unt pentru a le da mai multa culoare. Galbenelele constituie o baza delicioasa si fina pentru supe sau garniturile de orez si au un gust indragit, mai ales, de copii. Din galbenele se poate face pana si vin.

Galbenelele au efecte anti inflamatorii, antispastice, antivirale, antifungice si antibacteriene. Vindeca rani, maresc productia de bila si curata sistemul limfatic. In Europa, galbenelele sunt cunoscute pentru efectul lor calmant asupra inimii si a dispozitiei, pentru intarirea vederii si alungarea spiritelor rele. Galbenelele se folosesc pentru dureri de cap, icter, ochi iritati si dureri de dinti.  </p>
<p class="detalii">Ceaiul de gălbenele ameliorează durerile în gât</p> 
<p>Datorită proprietăților antiinflamatorii, consumul de ceai de gălbenele ajută la calmarea durerilor în gât și poate fi folosit chiar pentru a trata amigdalita. De asemenea, gargara cu ceai de gălbenele poate proteja sănătatea bucală și poate vindeca gingivita. </p>
<p class="detalii">Consumul de ceai de gălbenele întărește sistemul imunitar </p>
<p> Betacarotenul din compoziția ceaiul de gălbenele ajută organismul să lupte împotriva virușilor și bacteriilor, întărind sistemul imunitar. Consumul regulat de ceai previne răcelile de sezon și grăbește vindecarea simptomelor deja instalate. </p>
<p class="detalii">Ceai de gălbenele pentru îngrijirea tenului</p>
<p> Aplicarea compreselor cu ceai de gălbenele, în zonele problematice, ameliorează acneea și previne formarea ridurilor. Gălbenelele au proprietăți emoliente și catrizante și ajută la vindecarea iritațiilor, cicatricilor sau tăieturilor. Compresele de ceai de gălbenele tratează și alergiile locale pe piele și în zona ochilor, dar și iritațiile provocate de scutec, la nou născuți.</p>

      <div class="scroll-left">
         <div class="inner">
             <div class="col col1">
               <img src="../projectTW/img/galb1.jpg" alt="Galbenele">
               <img src="../projectTW/img/galb2.jpg" alt="Galbenele">
               <img src="../projectTW/img/galb3.jpg" alt="Galbenele">
               <img src="../projectTW/img/galb4.jpg" alt="Galbenele">
               <img src="../projectTW/img/galb5.jpg" alt="Galbenele">
               <img src="../projectTW/img/galb6.jpg" alt="Galbenele">
               <img src="../projectTW/img/galb7.jpg" alt="Galbenele">
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
