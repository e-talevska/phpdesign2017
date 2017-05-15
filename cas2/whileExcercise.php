	<!DOCTYPE html>
	<html>
	<head>
		<title></title>
	</head>
	<body>
	
	<?php 

		$x = rand(1,15);
		while ($x < 10) {
			echo "Hello <br>";
			$x++;
		}

		echo "after while";
	?>

	<?php

	$y = rand(0,20);

		while ($y < 21) {
			
			if ($y % 2) {
				echo "$y"."<br>";
				$y++;
			}
			
			else{
				echo "$y"." ";
				$y++;
			}
		}
	?>

		<?php

	$y = 1;

		while ($y < 21) {
			
			if ($y % 2) {
				echo $y ."<div class='evenNum'>Even number div </div>";
				$y++;
			}
			
			else{
				echo $y."<div class='oddNum'>Odd number div </div>";
				$y++;
			}
		}
	?>

	</body>
	</html>



	