<!DOCTYPE html>
<html>
<head>
	<title>Controls 2</title>
</head>
<body>



<?php 
	
	$year = 1994;
	$sign = (1994-4) % 12;


	switch($sign) {


		case 0:
			echo "Rat";
			break;
		case 1:
			echo "Ox";
			break;
		case 2:
			echo "Tiger";
			break;
	    case 3:
	    	echo "Rabbit";
			break;
		case 4:
			echo "Dragon";
			break;
		case 5:
			echo "Snake";
			break;
		case 6:
			echo "Horse";
			break;
		case 7:
			echo "Goat";
			break;	

		case 9:
			echo "Rooster";
			break;
		case 10:
			echo "Dog";
			break;
		case 11:
			echo "Pig";
			break;
		
			

			}




?>





</body>
</html>