<?php 


	$integerVar = 22;
	$floatVar = "Elena";
	$booleanVar = true;

	define('PI', 3.14);

	function calculate($inFeet)
 	{
 		$inCm = $inFeet * 0.032808399;
 		echo  $inFeet ." in feet is: " .$inCm;
 	}

 	function calculateArea($a, $b)
 	{
 		$area = $a * $b;
 		echo "The area of a rectangle is $area";
 	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>

 	<h2><?php echo "My name is " . $floatVar ?></h2>
 	<h2><?php echo "I am " . $integerVar . " years old" ?></h2>
 	<h2><?php 
 		if($booleanVar == true){
 			echo "Im a girl";
 		}else{
 			echo "Im a boy";
 		}
 	?></h2>
 	<h2><?php echo PI ?></h2>
 
 	<h2><?php calculate(1265); ?></h2>
 	<h2><?php calculateArea(5, 10) ?></h2>

 
 </body>
 </html>