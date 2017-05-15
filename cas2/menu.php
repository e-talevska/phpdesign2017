<!DOCTYPE html>
<html>
<head>
	<title>student's menu</title>
</head>
<body>

<?php 

		//variables
	$role = "admin";
 
?>

<?php 
	
	//if-else kontrolna struktura
	if($role == "student"){
		echo "<ul>
				<li>Grades</li>
				<li>School schedule</li>
			</ul>";
		}
	else if($role == "admin" || $role == "professor"){
		echo "<ul>
				<li>Students
					<ul><li>Grades</li></ul>
				</li>
			</ul>";
	}
	else if($role =="receptionis"){
		echo "<ul>
				<li>School schedule</li>
			</ul>";
	}
	else{
		echo "<h2>Log in error</h2>";
	}
 ?>	

 <?php 
	//switch kontrolna struktura
	switch($role){
		case 'student':
			echo "<ul>
				<li>Grades</li>
				<li>School schedule</li>
			</ul>";
		break;

		case 'admin':

		case 'professor':
			echo "<ul>
				<li>Students
					<ul><li>Grades</li></ul>
				</li>
			</ul>";
		break;

		case 'receptionis':
			echo "<ul>
				<li>School schedule</li>
			</ul>";
		break;

		default:
			echo "<h2>Log in error</h2>";
		break;
	}	
?>


</body>
</html>