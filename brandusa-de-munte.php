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
                <h1 class="titlu-plante"> Brandusa de munte, covorul violet pe pajiştile montane </h1>
                <img  class= "img-container" alt="Brandusa" src="../projectTW/img/brandusa.jpg">
               
                <p> Brânduşa de munte (Crocus heuffelianus, Crocus vernus) este o plantǎ scunda, perenǎ şi face parte din familia Iridacee şi are originea în Europa şi Asia. Ca şi celelalte flori din zona de munte, brânduşele încântǎ privirea turiştilor prin gingǎşia şi coloritul lor.</p>

<p class="detalii">Descrierea plantei</p> <p>Brânduşa de munte este o plantǎ care rǎsare din bulbi mici, în lunile friguroase, alǎturi de încântaţii vestitori ai primǎverii, ghioceii. Planta de înǎlţime micǎ are o singurǎ tulpinǎ care este înconjuratǎ la bazǎ de mai multe teci, pe care sunt prinse douǎ sau trei frunze alungite şi înguste. Frunzele la brânduşǎ au douǎzeci de centimetri şi apar deodatǎ cu florile. Fiind foarte înguste şi subţiri, sunt brăzdate în lung cu culoarea verde închis sau pot avea striaţii albe. La vârf tulpina se terminǎ cu o floare în formǎ de tub dupǎ care are forma unei cupe de cincizeci- şaizeci de milimetri cu şase diviziuni. Foarte rar pe tulpinǎ se gǎsesc douǎ flori. În mijlocul corolei sunt trei seminţe şi un stigmat galben. </p>


<p class="detalii">Perioada de inflorire si habitatul</p> <p>Brânduşa de munte ca şi ghiocelul scoate capul din zǎpadǎ în lunile friguroase, martie-aprilie, şi înfloreşte pânǎ în luna mai, dar şi toamna târziu. Floarea de culoare mov, violet sau albǎ se gǎseşte în grupuri mari şi dese în zona pǎduroasǎ, prin pǎşuni sau locuri ierboase. La noi în ţarǎ o întâlnim în Munţii Carpaţi şi în zona muntoasǎ a Apusenilor.</p>

<p class="detalii">Tratament împotrivă aftelor bucale</p> <p>Mai multe studii au demonstrat că aloe vera accelerează procesul de vindecare. Un studiu publicat în Dental Research Journal a arătat că pacienții care au aplicat gel cu aloe pe aftele din gură s-au vindecat mai repede, iar durerea a fost mai mică comparativ cu pacienții care nu au primit același tratament.</p>

<p class="detalii">Legenda acestei flori</p> <p>Brânduşa de primǎvarǎ şi cu brânduşa de toamnǎ se spune în popor cǎ erau douǎ surori gemene foarte frumoase, care au fost alungate în frig de mama lor vitregǎ. Pe una a alungat-o primǎvara, când afarǎ era frig, iar pe cealaltǎ toamna spre iarnǎ. Vǎzându-le atât de mici şi necǎjite Dumnezeu le-a transformat în flori. Floarea care înfloreşte primǎvara se spune cǎ este simbolul vieţii, iar cea care înfloreşte toamna este simbolul celor morţi. Din clipa în care cele douǎ fete au fost transformate în flori, ele se cautǎ fǎrǎ sǎ se poatǎ întâlni vreodatǎ.</p> 


           <div class="scroll-left">
         <div class="inner">
             <div class="col">
               <img src="../projectTW/img/brandusa1.jpg" alt="Brandusa">
               <img src="../projectTW/img/brandusa2.jpg" alt="Brandusa">
               <img src="../projectTW/img/brandusa3.jpg" alt="Brandusa">
               <img src="../projectTW/img/brandusa4.jpg" alt="Brandusa">
               <img src="../projectTW/img/brandusa5.jpg" alt="Brandusa">
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
