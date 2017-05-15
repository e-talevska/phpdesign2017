<!DOCTYPE HTML>
<html>
	<head>
		<title>Control Structures 2</title>
	</head>
	<body>
	<h3>
		<?php
			switch (rand(1,5)) {
				case 1:
					echo "You didn't pass the test";
					break;
				case 2:
					echo "You can do a lot better";
					break;
				case 3:
					echo "You can do better";
					break;
				case 4:
					echo "Good";
					break;
				case 5:
					echo "Excellent";
					break;				
			}
		 ?>
		 <br />
		 <?php
		 	$year = 1992;
		 	$zodiac = ($year - 4) % 12;
		 	switch ($zodiac) {
		 		case 1:
		 			echo "You are a Rat";
		 			break;
		 		case 2:
		 			echo "You are a Ox";
		 			break;
		 		case 3:
		 			echo "You are a Tiger";
		 			break;
		 		case 4:
		 			echo "You are a Rabbit";
		 			break;
		 		case 5:
		 			echo "You are a Dragon";
		 			break;
		 		case 6:
		 			echo "You are a Snake";
		 			break;
		 		case 7:
		 			echo "You are a Horse";
		 			break;
		 		case 8:
		 			echo "You are a Goat";
		 			break;
		 		case 9:
		 			echo "You are a Monkey";
		 			break;
		 		case 10:
		 			echo "You are a Rooster";
		 			break;
		 		case 11:
		 			echo "You are a Dog";
		 			break;
		 		case 12:
		 			echo "You are a Pig";
		 			break;
		 		default:
		 			echo "Error";
		 			break;												
		 	}
		  ?>
	 </h3>
	</body>
</html>