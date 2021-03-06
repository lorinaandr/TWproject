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
			 <div class="whitespace-bar"></div>
                <div class="homepage">
                <h1 class="titlu-plante"> Orhideea, floarea numită şi elixirul iubirii! </h1>
								<img  class= "img-container" alt="Orhidee" src="../projectTW/img/orhidee.jpg">
                
								<p> Dintre toate florile orhideea are o însemnătate aparte, despre ea existând numeroase credinţe populare, care mai sunt şi astăzi prezente.

Folosită în special ca plantă ornamentală, această floare delicată, graţioasă şi exotică a fost şi este încă un simbol al dragostei, luxului, frumuseţii şi puterii.</p>
               
               <p>Orhideea mai este numită şi floarea iubirii, motivul fiind acela că nu este pretenţioasă  şi poate înflori oriunde, în orice condiţii climatice.
Orhideea poate constitui un cadou ideal, potrivit oricărei ocazii, fie că vorbim de o aniversare, un botez sau o nuntă. Însă cel mai adesea este dăruită femeii iubite, livrând un mesaj de iubire durabilă, afecţiune necondiţionată, armonie şi perfecţiune spirituală.</p>
              <p class="detalii">Culoarea florilor de orhidee poate avea diverse simboluri.  </p>
               <p> Culoarea roşie înseamnă veselie, pasiune şi dragoste.
Rozul simbolizează romantismul, dragostea şi prietenia.
Vişiniul este asociat cu spiritul de lider şi curajul.
Portocaliul reprezintă entuziasmul, fericirea, inteligenşa şi energia.
Verdele este un simbol al dezvoltării, stabilităţii, armoniei şi fertilităţii.
Albastrul aduce un mesaj de încredere, înţelepciune, loialitate, credinţă, adevăr, linişte interioară şi calm.
Movul este asociat cu înţelepciunea, demnitatea, independenţa, creativitatea, misterul şi magia.
Albul înseamnă siguranţa, puritatea şi optimismul.
Culoarea maro promovează ideea de stabilitate şi luciditate.
</p>
<div class="scroll-left">
         <div class="inner">
             <div class="col col1">
               <img src="../projectTW/img/orh1.jpg" alt="Orhidee">
               <img src="../projectTW/img/orh2.jpg" alt="Orhidee">
               <img src="../projectTW/img/orh3.jpg" alt="Orhidee">
               <img src="../projectTW/img/orh4.jpg" alt="Orhidee">
               <img src="../projectTW/img/orh5.jpg" alt="Orhidee">
               <img src="../projectTW/img/orh6.jpg" alt="Orhidee">
               <img src="../projectTW/img/orh7.jpg" alt="Orhidee"> 
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
