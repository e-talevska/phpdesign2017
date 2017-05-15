<?php 

	echo 'Hello World';
	// phpinfo();

	$firstName = 'Martin';
	$year = 2017;

	$age = 25;
	$male = true;

	$year = '6543';

	// Define constant
	define('PI', 3.14);


?>

<!DOCTYPE HTML>
	<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2><?php echo "My \"name\" is: " .  $firstName; ?></h2>
		<p><?php echo  "First Name: " . $firstName . '<br/>' . " Age: " . $age .'<br/>' . " Gender: " . $male; ?></p>
		<p><?php echo PI; ?></p>

	</body>
</html>