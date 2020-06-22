<?php 
 require_once 'head.php';
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
                  <h1 class="search-title"> Căutare </h1>
                     <?php require_once 'cautare.php'  ;                         
                      ?>
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
