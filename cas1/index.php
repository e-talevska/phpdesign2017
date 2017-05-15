<?php 

echo "Hello World"; #phpinfo();
echo "<br>";
echo "Hello again";

/*
gfdg
fgdfg
gdfg
*/

//define string
$firstName = "Emilija"; 

//define integer
$year = 2017;

//define boolean
$flag = false;

//change variable value
$year = "2125";

//define constant PI with value 3.14
define('PI', 3.14);
?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<h2><?php echo "My \"name\" is:". $firstName; ?></h2>
		<?php echo "<p>Current year $year $flag</p>"; ?>
		<p><?php echo "PI has value: ".PI; //must use concatenation ?></p>
	</body>
</html>

