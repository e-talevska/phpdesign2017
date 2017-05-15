<!DOCTYPE html>
<html>
<head>
	<title>student's menu</title>
</head>
<body>


<!-- Vezba 2, so If-Else -->
<?php 
	$role = "student";
 
?>

<?php 

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


<!-- Vezba 2, so Switch -->

 <?php

 	$role = "admin";
 	switch($role){
 	case "student":
	 	echo 	"<ul>
					<li>Grades</li>
					<li>School schedule</li>
				</ul>";
		break;
	case "admin":
	case "professor":
		echo  	"<ul>
					<li>Students
						<ul><li>Grades</li></ul>
					</li>
			 	</ul>";
		break;
	case "receptionis":
		echo 	"<ul>
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