<?php 

echo "Hello World";
echo" <br />";
echo "Hello again";
// phpinfo(); 
$firstName = "Anja";
$year = 2017;
$integer = 22;
$float = 2.25;
$boolean = true;
define('PI', 3.14);


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<h2><?php echo "My name is: $firstName"; ?></h2>
	<p><?php echo "I am  $integer years old" ?></p>
	<p><?php echo $float ?></p>
	<p><?php echo $boolean ?></p>
	<?php echo "<p>Current year $year</p>"; ?>
	<p><?php echo "PI has value: " + PI; ?></p>

</body>
</html>