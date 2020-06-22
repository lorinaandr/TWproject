<?php
require_once 'upload-album.php';?>
<!DOCTYPE html>
<html lang="en" >
<head>
   <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../projectTW/css/style.css">
  <link rel="stylesheet" href="../projectTW/css/responsive.css">
  <link rel="shortcut icon" href="https://www.meetsun.ro/wp-content/themes/MeetSun/images/meet-sun-logo50.png" type="image/x-icon">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>  
  <script type="text/javascript">
    function delete_image(id){  
  if(confirm("Sunteti sigur ca doriti sa stergeti din ierbar?"))
  {
    var file = $("#sterge-poza").val();
    $.ajax({
      type:"POST",
      url:"delete-images.php",
      data:{'id':id},
      success: function(data){
       header('Location: profil.php');
      }
    });
  }
 }
  </script>
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
              <form class="profil-user" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data"> 
           <?php
                   require_once 'profil-img.php' ; 
            ?> 
             
               <div class="bio">
              <h1>     <?php echo $nume ?>  </h1>
            
               </div>
             
          <div class="prfnav">
             <label for="profileImage"> 
              <a> Schimba imagine profil</a></label> 
                <input type="file" name="profileImage" id="profileImage">
               <input type="submit" name="submit-profile" value="Posteaza"> 
                 <label for="pwreset"> 
              <a href="pwreset.php" class="reset"> Schimba parola</a></label> 
                 <label for="pwreset"> 
              <a href="logout.php" class="reset"> Delogare</a></label> 
          </div>
          </form>
           <span class="error"><?php echo $msg; ?></span>
        </div>
       </div>
     
    </main>
         <div class="gallery-upload">
          <form class="formupload" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST" enctype="multipart/form-data">
           <input type="text" name="filetitle" placeholder="Denumire planta...">
          <input type="text" name="filedesc" placeholder="Descriere imagine...">
          <input type="file" name="file"> <button type="submit" name="submit">Posteaza</button>
           </form> 
         </div>
 <section class="album">
   <?php
    require_once 'display-album.php';
  ?>

  </section>
  </div>

    <div id="footer">
        
        <div class="copyright">
            Copyright - Website &copy; 2020
        </div>
</div>
</body>
</html>
