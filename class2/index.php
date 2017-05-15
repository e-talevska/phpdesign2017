<?php date_default_timezone_set ( 'Europe/Skopje' ) ?>
<!DOCTYPE html>
<html>
<head>
	<title>Controls</title>
</head>
<body>

<?php 

	function grade ($points)
	{
		if ($points >= 51) {
			echo "You Passed";
		}else{
			echo "You Failed";
		}
	}

	grade(51);

	echo "<br>";
	echo date('Y-M-D H-i-s ');

	echo "<br>";
	if (date('H') > 5 && date('H') <= 12) {
		echo "<h1> Good Morning </h1>";
	}else if(date('H') > 12 && date('H') <= 20){
		echo "<h1> Good Afternoon </h1>";
	}else if(date('H') > 20 && date('H') <= 05){
		echo "<h1> Good Night </h1>";
	}


	function menu ($role)
	{
		if($role == "student"){
			echo ' <ul>
				 	<li>Grades</li>
				 	<li>School Schedule</li>
				   </ul>';
		}else if($role == "admin" || $role == "professor"){
			echo '  <ul>
					 	<li>students <ul><li>Grades</li></ul> </li>
					 	<li>School Schedule</li>
					</ul>';
		}else if($role == "receptionist"){
			echo ' <ul>
				 	<li>School Schedule</li>
				   </ul>';
		}
	}

	// menu("admin");

	function menuSwitch($Role)
	{
		switch($Role){
			case 'student':
				echo ' <ul>
					 	<li>Grades</li>
					 	<li>School Schedule</li>
					   </ul>';
				break;
			case 'admin':
			case 'professor':
				echo '  <ul>
						 	<li>students <ul><li>Grades</li></ul> </li>
						 	<li>School Schedule</li>
						</ul>';
				break;
			case 'receptionist':
				echo ' <ul>
					 	<li>School Schedule</li>
					   </ul>';
				break;
			default:
				echo "No menu for you";
		}
	}

	menuSwitch("professor")

 ?>




</body>
</html>