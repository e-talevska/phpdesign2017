<?php 

	date_default_timezone_set('Europe/Skopje');

	// $user = "student";
	// if($user == "admin" || $user == "professor"){
	// 	echo "<ul><h4>For admin & professor we have menu :</h4> <li>Students</li><li>Grades</li><li>Schoul Schedule</li></ul>";
	// }else if($user == "receptionist"){
	// 	?> <ul><h4>For receptionist we have menu :</h4><li>School Schedule</li></ul><?php //moze da go zatvoris php za da pisuvas HTML
	// }else if($user == "student"){
	// 	echo "<ul><h4>For a student we have menu :</h4><li>Grades</li><li>School Schedule</li></ul>";
	// }else{
	// 	echo "None of the required roles.";
	// }

	// switch($user){
	// 	case "admin":
	// 	case "professor":
	// 		echo "<ul><h4>For admin & professor we have menu :</h4> <li>Students</li><li>Grades</li><li>Schoul Schedule</li></ul>";
	// 		break;
	// 	case "receptionist":
	// 		echo "<ul><h4>For receptionist we have menu :</h4><li>School Schedule</li></ul>";
	// 		break;
	// 	case "student":
	// 		echo "<ul><h4>For a student we have menu :</h4><li>Grades</li><li>School Schedule</li></ul>";
	// 		break;
	// 	default:
	// 		echo "None of the required roles.";
	// 		break;
	// }

	?> <h3> <?php
	switch (rand(1,6)) {
		case 1:
			echo "Num 01";
			break;
		case 2:
			echo "Num 02";
			break;
		case 3:
			echo "Num 03";
			break;
		case 4:
			echo "Num 04";
			break;
		case 5:
			echo "Num 05";
			break;	
		default:
			echo "Not in range.";
			break;
	} 
	?></h3> 

	 <h3> <?php
	$year = 1995;
	$temp = $year . " is the year of the ";
	switch (($year-4) % 12 ) {
		case 0:
			echo $temp . "Rat";
			break;
		case 1:
			echo $temp . "Ox";
			break;
		case 2:
			echo $temp . "Tiger";
			break;
		case 3:
			echo $temp . "Rabbit";
			break;
		case 4:
			echo $temp . "Dragon";
			break;
		case 5:
			echo $temp . "Snake";
			break;
		case 6:
			echo $temp . "Horse";
			break;
		case 7:
			echo $temp . "Goat";
			break;	
		case 8:
			echo $temp . "Monkey";
			break;
		case 9:
			echo $temp . "Rooster";
			break;
		case 10:
			echo $temp . "Dog";
			break;
		case 11:
			echo $temp . "Pig";
			break;
		default:
			echo "Not in range.";
			break;
	} 
	?></h3>

	<!-- WHILE LOOP -->
	<h2>
	<?php 

	$x = rand(1,15);
	while($x < 10){
		echo "<br />Hello " . $x;
		$x++; 
	}

	echo "<br />After while.";

	?>
	</h2>

	<!-- TASK 02 CHECK EVEN OR ODD NUM -->
	<h1> 
	<?php 
	$y = 1;
	while ($y <= 20) {
		echo "<div class='box'></div>";
		if($y % 2 == 0){
			echo "<div class='clear'>" . $y . " is an even number. " . "</div>";
		}
		else{
			echo $y . " is an odd number.";
		}
		$y++;
	}
	?>
	</h1>

<!DOCTYPE html>
<html>
	<head>
		<title>Class 02 05.02.2017 Contrul Structures</title>
		<style>
			div.box{
				float: left;
				width: 100px;
				height: 100px;
				border: 1px solid #ccc;
			}
			.clear{
				clear: both;
			}
		</style>
	</head>
	<body>
		<?php echo date('Y-m-d H:i:s'); 
			"<br />";
		if(date('H') > 20){ echo "<h3>It's past five.</h3>"; }	
		else if(date('i') < 20){echo "<h3>Less than 20 minutes passed.</h3>";}
		else{ echo "<h3>It's past five.</h3>"; };
		?> <?php

		?>
	</body>
</html>