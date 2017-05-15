<?php

// echo '<h2>Hello Seavus</h2>';

# phpinfo();

// variables 

$firstName = 'Stefi';
$year = 2017;

$number = 2560;
$song = 'Not Today';
$band = "BTS";
$boolean = true;

// change variable value ^^
$year = 2025;

// konstanti constants

define('myName', 'Stefi');




?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP introduction</title>
</head>
<body>

	<h2 style="margin: 0 auto; text-align: center;">PHP Introduction</h2><hr>

<!-- pechatenje na varijabli - vo navodnici -->
	<h2><?php 

	// vo edinechni navodnici nemozhe da se koristat varijabli - ' Moeto ime e $firstName' NE MOZHE VAKA
	// a vo dvojni navodnici mozhe da se koristat varijabli - "Moeto ime e $firstName" 	MOZHE
	// za da ispechati navodnici, pred navodnicite se pishuva kosa crta-\ 
	
	echo "You ask my name, you \"twat\"? It&#39;s $firstName, the year is $year. <br>";
	echo 'My name? It\'s Stefi. <hr>';
	
	echo "My favourite song at the moment is $song by $band and I've listened to it $number times."

	 ?></h2>



	 <!-- pechatenje na konstanta bez navodnici i $ i mora so konkatenacija -->
	 <p><?php 
	 echo 'My name is '.myName;
	  ?></p>


</body>
</html>