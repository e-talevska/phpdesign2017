<?php 


	echo "Hello World";
	echo "<br>";
	echo "Hello again";


	$firstName	= "Lilika";
	$year = 2017;
	$integer = 22;
	$float = 2.30;
	$boolean = true;

	define('PI', 3.14);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<h2><?php echo "<p>May name is: $firstName<p>"; ?></h2>
	<p><?php echo "I am $integer years old"?></p>
	<p><?php echo "I am $float tall "?></p>
	<p><?php echo "Is it $boolean that I am $integer "?></p>
	<p><?php echo "PI has value: " + PI;?></p>




</body>
</html>