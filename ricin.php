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
          </li></ul></li> </ul> 
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
                <h1 class="titlu-plante"> Ricin (Ricinus communis) </h1>
								<img  class= "img-container" alt="Ricin" src="../projectTW/img/ricin.png">
                <p class="detalii"> Descriere </p>
								<p> Ricinul este o planta tropicala oleaginoasa, originara din India si Africa. In prezent este cultivata la noi in tara in scop ornamental, industrial si medicinal. Uleiul extras din semintele de ricin are valoare terapeutica dar este folosit si drept combustibil fiind solubil in alcool.Semintele de ricin contin gliceride, lectine, uleiuri vegetale, acidul ricinoleic, acizi oleici, stearici, linoleici, un alcaloid (ricinina), o toxoalbumina (ricina), enzime, vitamina E, betacarotenoizi, lipide, proteine.
</p>
               <p class="detalii">Actiune</p>
               <p>Datorita acidului ricinoleic, uleiul obtinut din semintele de ricin are proprietati purgative (folosit in acest scop de catre medicina populara din timpuri stravechi), acidul ricinoleic stimuleaza peristaltimul intestinal, producand purgatie.</p>
              <p class="detalii">Administrare </p>
               <p> In uz intern este indicat in caz de constipatie, parazitoze intestinale, iar in uz extern pentru alopecie, bataturi, negi, papiloame, veruci, acnee, ulceratii, cicatrici cheloide. Uleiul din seminte de ricin se extrage in laboratoare specializate si se foloseste in uz intern doar in doza recomandata de medic (datorita marii toxicitati) sau preparate standardizate bine dozate. In uz extern se maseaza cu ulei din seminte de ricin pielea in caz de acnee (fiind un bun agent antibacterian natural), alopecie (contine acizi omega 3 importanti pentru hranirea radacinii firului de par), pentru bataturi, crapaturi, negi, alunite se maseaza zona de 2-3 ori pe zi. Se pot indeparta vergeturile (femeile gravide sau care au nascut) prin masarea pe burta si coapse in fiecare zi; cicatricele ramase dupa o operatie sau alta taietura sau rana se pot vindeca lasand o compresa inmuiata in ulei de ricin timp de cateva ore pe zi. Din cauza prezentei in compozitie a toxoalbuminei, ricina poate produce aglutinarea globulelor rosii cauzand moartea - consumul a cateva seminte de ricin poate fi mortal. Este indicat din cauza toxicitatii sa nu se depaseasca doza recomandata si doar in fomule standardizate preparate de laboratoare specializate.</p>
<div class="scroll-left">
         <div class="inner">
             <div class="col ">
               <img src="../projectTW/img/ricin1.jpg" alt="Ricin">
               <img src="../projectTW/img/ricin2.jpg" alt="Ricin">
               <img src="../projectTW/img/ricin3.jpg" alt="Ricin">
               <img src="../projectTW/img/ricin4.jpg" alt="Ricin">
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
