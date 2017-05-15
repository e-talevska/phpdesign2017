<!DOCTYPE HTML>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php
					 // 0, 1, 2
			$numbers = [1, 4, 9, 28];
			echo $numbers[2];

			for($i=0; $i < count($numbers); $i++){
				echo "<p>{$numbers[$i]}</p>";		
			}
			echo "Before adding elements <hr />";

			$numbers[1] = 10;
			echo $numbers[1] . "<br />";
			$numbers[] = 11;
			for($i=0; $i < count($numbers); $i++){
				echo "<p>{$numbers[$i]}</p>";		
			}
			echo "Before array push <hr />";

			array_push($numbers, 160, 170, 180);
			for($i=0; $i < count($numbers); $i++){
				echo "<p>{$numbers[$i]}</p>";		
			}
			echo "<hr />";
		 ?>
	</body>
</html>