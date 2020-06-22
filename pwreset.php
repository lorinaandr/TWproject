<?php
require_once "reset.php";
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
        <div class="content1 d-flex-row">
          <div class="main">
            <div class="container">
                <div class="formularAuth">
                  <div class="titleMiddle">Schimbare parola</div>
                  <form class="formular" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
                    <div class="input">
                      <p><span class = "error">* campuri obligatorii.</span></p>
                     <label>E-mail</label>
                     <input class="form1" type="text" name="email"  >
                      <span class="error">*<br><?php echo $emailErr; ?></span>
                    </div>
                    <div class="input">
                      <label>Parola noua</label>
                      <input class="form1" type="password" name="parola" >
                      <span class="error">*<br><?php echo $parolaErr; ?></span>
                    </div>
                    <div class="input">
                      <label>Confirmare parola</label>
                      <input class="form1" type="password" name="confirmareparola" >
                      <span class="error">*<br><?php echo $confirmareparolaErr; ?></span>
                    </div>
                    <label for='securitate'>Intrebare de securitate:<span class="error">*<br><?php echo $securitateErr; ?></span></label>
                      <select name='securitate' id='securitate'>
                      <option value="">Selecteaza</option>
                      <option value="Care este animalul preferat?">Care este animalul preferat?</option>
                      <option value="Care este numele tatalui?">Care este numele tatalui?</option>
                     <option value="Care este data ta de nastere?">Care este data ta de nastere?</option>
                     </select>  <br> <br>     
                    <input class="form1" type="text" name="raspuns" placeholder="Raspuns" > <span class="error">*<br><?php echo $raspunsErr; ?></span>
                    <div class="button">
                    <input type="submit" name="register" value="Salveaza">
                    </div>
                    <span class="error"><?php echo $msg; ?></span>
                      </form>
                    
                    
                
             </div>
          </div> 
  </div>
 </div>
      </main>
</div>
    <div id="footer">
        
        <div class="copyright">
            Copyright - Website &copy; 2020
        </div>
</div>
</body>
</html>
