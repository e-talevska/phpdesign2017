<?php 
	
	echo "Hello!!";

	//phpinfo();

	//Definiranje na string
	$firstName = "Martina";

	//Definiranje na integer
	$year = 2017;

	//Change variable value
	$year = 2020;

	$lastName = "Linkova";
	$age = 23;
	$boolean = true;

	define('PI', 3.14); //Definiranje na konstanta, vgradena e vo PHP

?>

<!DOCTYPE html>
<html>
	<head>
		<title> Chas 1, PHP </title>
	</head>
	<body>

		<h2> <?php echo "My name is: $firstName"; ?> </h2>
		<h2> <?php echo  "My 'name' is:"  . $firstName; ?> </h2>
		<!-- Konkatanacija pravime so . (tochka) -->

		<p> <?php echo "Last name: $lastName"; ?> </p>
		<p> <?php echo "Age: $age"; ?> </p>
		<p> <?php echo "Boolean: $boolean"; ?> </p>
		<p> <?php echo "My first name is: $firstName" . " Last name: $lastName, Year: $year"; ?> </p>
		<p> <?php echo PI; ?> </p> 
		<p> <?php echo "PI has value: " . PI; ?> </p> <!-- Mora da koristime konkatanacija vo ovoj sluchaj. -->
		<!-- 
		wamp - http://www.wampserver.com/en/

		-> localhost vo browser za preku browser da pristapam do web server

		-> http://localhost/php17/cas1/index.php 
		 -> disk C - wamp64 - www - moj folder (php17)

		Da go simneme wamp i da kreidame file! 
		C:\wamp64\www\php17\cas1
		-->
		
	</body>
</html>