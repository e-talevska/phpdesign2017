<!DOCTYPE html>
<html>
	<head>
		<title>Controls Two</title>
	</head>
	<body>

		<h3>
			<?php 
				
				switch(rand(1,5)){
					case 1:
					echo 'You got a E. You didn\'t pass.';
						break;
					case 2:
					echo 'You got a D. You can do a lot better.';
						break;
					case 3:
					echo 'You got a C. You can do better.';
						break;
					case 4:
					echo 'You got a B. Good.';
						break;
					case 5:
					echo 'You got an A. Excellent.';
						break;
				}

			?>

		 </h3>

		 <!--  \\\\\\ nova zadacha  -->

	<?php 

		$year = 1988;

		switch (($year-4)%12) {
			case 0:
			echo "$year is the year of the Rat.";
				break;
			case 1:
			echo "$year is the year of the Ox.";
				break;
			case 2:
			echo "$year is the year of the Tiger.";
				break;
			case 3:
			echo "$year is the year of the Rabbit.";
				break;
			case 4:
			echo "$year is the year of the Dragon.";
				break;
			case 5:
			echo "$year is the year of the Snake.";
				break;
			case 6:
			echo "$year is the year of the Horse.";
				break;
			case 7:
			echo "$year is the year of the Goat.";
				break;
			case 8:
			echo "$year is the year of the Monkey.";
				break;
			case 9:
			echo "$year is the year of the Rooster.";
				break;
			case 10:
			echo "$year is the year of the Dog.";
				break;
			case 11:
			echo "$year is the year of the Pig.";
				break;	
			default:
			echo 'What year are you born again?';
		}



	 ?>




	</body>
</html>