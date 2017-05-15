<?php date_default_timezone_set('Europe/Skopje'); ?>

<!DOCTYPE html>
<html>
<head>
	<title>Controls Strucctures</title>
</head>
<body>
	<?php echo date('Y-m-d H:i:s'); ?>
	
	<?php 
	
		if(date('H') >= 11){
			echo "<h3>Good Evening</h3>";
		}

		else if(date('H') <= 10 && date('H') >= 06){
			echo "<h3>Good Morning</h3>";
		}

		else{
			echo "<h3>Good Afternoon</h3>";
		}

		if()

	?>

<h3>
		<?php 
			switch (rand(1,5)) {
				case 1:
					echo "You didn't pass the exam";
				break;

				case 2:
					echo "You can do a lot better";
				break;
				
				case 3:
					echo "You can do better";
				break;

				case 4:
					echo "Good job";
				break;

				case 5:
					echo "Excellent job";
				break;

				default:
				break;
			}
		?>
	</h3>
<h3>
	<?php 

		$year = 1993;
		$zodiacCalculation = ($year - 4)% 12;
		


		switch ($zodiacCalculation) {
			case 0:
				echo "$year is the year of the rat";
				break;
			case 1:
				echo "$year is the year of the ox";
				break;
			case 2:
				echo "$year is the year of the tiger";
				break;
			case 3:
				echo "$year is the year of the rabbit";
				break;
			case 4:
				echo "$year is the year of the dragon";
				break;
			case 5:
				echo "$year is the year of the snake";
				break;
			case 6:
				echo "$year is the year of the horse";
				break;
			case 7:
				echo "$year is the year of the goat";
				break;
			case 6:
				echo "$year is the year of the monkey";
				break;
			case 7:
				echo "$year is the year of the rooster";
				break;
			case 8:
				echo "$year is the year of the dog";
				break;
			case 9:
				echo "$year is the year of the pig";
				break;
			default:
				echo "The zodiac is not found";
				break;
		}

	?>
</h3>


</body>
</html>