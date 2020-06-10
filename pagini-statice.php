<?php
// Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: homepage.html");
    exit;
}
 
// Include config file
require_once "config.php";

// File upload path
$targetDir = "uploads/";
$fileName = basename($_FILES["img"][""]);
$targetFilePath = $targetDir . $fileName;
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

if(isset($_POST["submit"]) && !empty($_FILES["img"][""])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        if(move_uploaded_file($_FILES["file"]["tmp_name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $db->query("INSERT into images (file_name, uploaded_on) VALUES ('".$fileName."', NOW())");
            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
            }else{
                $statusMsg = "File upload failed, please try again.";
            } 
        }else{
            $statusMsg = "Sorry, there was an error uploading your file.";
        }
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;

// Get images from the database
$query = $db->query("SELECT * FROM images ORDER BY uploaded_on DESC");

if($query->num_rows > 0){
    while($row = $query->fetch_assoc()){
        $imageURL = 'uploads/'.$row["file_name"];
?>
    <img src="<?php echo $imageURL; ?>" alt="" />
<?php }
}else{ ?>
    <p>No image(s) found...</p>
<?php }

?>

<!DOCTYPE html>
<html lang="en">
<head>
 <meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=yes">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
<meta http-equiv="content-language" content="ro" />
<meta http-equiv="cache-control" content="no-cache" />
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta http-equiv="pragma" content="no-cache" />
<meta name="language" content="Romanian" />
<meta name="robots" content="index, follow, all" />
<meta name="HandheldFriendly" content="true">
<title>Plantonline</title>
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:200,200i,300,300i,400,400i,600,600i,700,700i,900,900i&amp;subset=latin-ext" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../projectTW/css/admin.css">
</head>
<body>
<div id="left">
	<ul class="meniu">
		<li class="liexpand" style="padding-bottom: 0px; border-bottom: medium none;">
		<a href="#" class="expand notAjax"><i class="fa fa-square" aria-hidden="true"></i>Continut</a>
			<ul id="statusuricomenzi" style="display: block;">
				<li><a href="pagini-statice.php" data-target="#content"><i class="fa fa-caret-right" aria-hidden="true"></i> Pagini statice</a></li>
			</ul>
		</li>
		<li class="liexpand" style="padding-bottom: 0px; border-bottom: medium none;">
		<a href="#" class="expand notAjax"><i class="fa fa-square" aria-hidden="true"></i>Setari</a>
			<ul id="statusuricomenzi1" style="display: block;">
				<li><a href="setari-generale.php" data-target="#content"><i class="fa fa-caret-right" aria-hidden="true"></i> Setari generale</a></li>
			</ul>
		</li>
		<li class="liexpand" style="padding-bottom: 0px; border-bottom: medium none;">
		<a href="#" class="expand notAjax"><i class="fa fa-square" aria-hidden="true"></i>Statistici</a>
			<ul id="statusuricomenzi2" style="display: block;">
				<li><a href="raport-activitate.php" data-target="#content"><i class="fa fa-caret-right" aria-hidden="true"></i> Raport activitate</a></li>
			</ul>
		</li>
	</ul>
</div>
<div id="sus">
<i class="fa fa-align-justify pointer butonstanga"></i>
<div class="susl">
<a href="#">
<i class="fa fa-user"></i> Administrator(Nume) 
</a>
</div>
<div class="susr">
	<a class="linkSus" href="http://localhost/projectTW/homepage.php" title="Mergi la site (in FrontEnd)">Go FrontEnd</a>
</div>
<div class="c"></div>
</div>
<div id="contentholder">
	<div id="content">
		 <div id="right">
			<br>
			<div style="text-align:center;">
			<form action="upload.php" method="post" enctype="multipart/form-data">
             Select Image File to Upload:
             <input type="file" name="file">
             <input type="submit" name="submit" value="Upload">
             </form>


			<br>
			</div>
			<div class="c"></div>
		</div>
	</div>
</div>
<div id="jos">
<div id="performanta">
Timp: <strong id="timp">0.3273</strong> &amp; Ram: <strong id="ram">2.71MB</strong>
</div>
</div>

</body>
</html>