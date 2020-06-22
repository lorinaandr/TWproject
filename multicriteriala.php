<?php
 require_once 'head-multi.php';
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
                              <li><a href="pelin.php"><P>t</P>elin</a></li>
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
          <div class="content-profil">
            <h1 class="search-title"> Căutare multicriteriala</h1>
             <div class="multicrit-search">
          <form class="formulticrit" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" >
           <label for='tip'>Tip:</label>
           <select name='tip-planta' id='tip'>
          <option value="">Selecteaza</option>
         <option value="medicinale">Medicinale</option>
         <option value="exotice">Exotice</option>
         <option value="montane">Montane</option>
         <option value="ornamentale">Ornamentale</option>
         </select>
         <label for='culoare'>Culoare:</label>
          <select name='culoare' id='culoare'>
          <option value="">Selecteaza</option>
         <option value="rosu">Rosu</option>
         <option value="galben">Galben</option>
         <option value="mov">Mov</option>
         <option value="albastru">Albastru</option>
         <option value="roz">Roz</option>
         <option value="alb">Alb</option>
         <option value="verde">Verde</option>
         </select>
         <label for='zona'>Zona:</label>
          <select name='zona' id='zona'>
          <option value="">Selecteaza</option>
         <option value="calda">Calda</option>
         <option value="rece">Rece</option>
          <option value="umeda">Umeda</option>
         </select>
         <select name='cauta' id='cauta'>
          <input class="cauta" type="text" placeholder="Cauta..." name="cauta">
            </select>
          <button type='submit' name='cautare-multicriteriala'>Cauta</button>
           </form> 

         </div>
         <div class="result">      
<?php
 require_once 'cautare-multicriteriala.php';
?>
  </div>
  </div>
   </div>
 </main> </div>
    <div id="footer">
        
        <div class="copyright">
            Copyright - Website &copy; 2020
        </div>
</div>
</body>
</html>
