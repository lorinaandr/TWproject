<?php 
include("config.php");
$page = input($_GET['Plantonline']) or die('ERROR: Missing page ID');
$query='SELECT date, count(*),
    count(distinct IP) FROM `'.$countdetail.'`  
	where section=\''.$page.'\' group by date order by date';
$result=mysql_query($query) or die('Query failed: ' . mysql_error());
$fields=mysql_num_fields($result);
$num=mysql_numrows($result);
$loopCounter = 0;
$data = array();
$data2 = array();
while($ris=mysql_fetch_row($result))
    {              
       $data[$ris[0]]=$ris[1];     
       $data2[$ris[0]]=$ris[2];       
    } 

mysql_close($con);
include("phpgraphlib.php"); 
$graph=new PHPGraphLib(600,250);
$graph->addData($data,$data2);
$graph->setTitle("Site Statistics");
$graph->setBars(false);
$graph->setLine(true);
$graph->setDataPoints(true);
$graph->setDataPointColor("maroon");
$graph->setDataValues(true);
$graph->setDataValueColor("maroon");
$graph->setGoalLine(.0025);
$graph->setGoalLineColor("red");
$graph->setXValuesHorizontal(true);
$graph->createGraph();
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