<?php 

echo "Hello World";
// Print Screen command is: phpinfo();

//Definiranje na promenliva
$firstName = "Boban Serafimovski"; // Define string

$year = 2017; // Define Integer

$flag = false; // define boolean

$year = "2015"; // Change variable value

define{'PI'. 3.14}; // Define constant PI with value 3.14
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<h2><?php echo "My name is $firstName"; ?></h2> <!-- Koga imame dvijni navodnici stringot go zamenuva so varijabla --> 
<h2><?php echo 'My name is $firstName'; ?></h2> <!-- Koga imame edinecni navodnici stringot ne go zamenuva so varijabla --> 
<h2><?php echo "My \"name\" is:". $firstName; ?></h2>
<?php echo "<p>Current year $year $flag</p>"; ?>
<p><?php echo "PI has value: </p>

<h2><?php echo PI; ?></h2>


</body>
</html>



