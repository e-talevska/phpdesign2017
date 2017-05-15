<!DOCTYPE html>
<html>
<head>
	<title>While loop</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<?php 
	$x = rand(1,15);
	while ($x < 10) {
		echo "Hello<br>";
		$x++;
	}
	echo "After while";
?>

<!-- vezba od cas2-->
<?php

$i = 1;
	while($i <= 20){
		echo "<div class='box'></div>";
		if($i % 2 == 0){
			echo "<div class='clear'></div>";
		}
		$i++;
	}




?>
<?php

$i = 1;
	while($i <= 20){
		echo "$i <br>";
		$i++;
	}
	




?>


<!-- check even and odd modules
$even = ($num % 2 == 0);
$odd = ($num % 2 != 0);
-->
</body>
</html>
