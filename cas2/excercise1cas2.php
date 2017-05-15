
<!DOCTYPE html>
<html>
<head>
	<title>Excercise #1</title>
</head>
<body>

<?php 
$role = "student";
?>
<?php 
	if( $role == "student") {
		echo "<ul>
				<li>Grades</li>
				<li>School Scheduale</li>
			</li>";
	}
	else if($role == "admin" || $role == "profesor") {
		echo "<ul>
					<li>Students
						<ul>
							<li>Grades</li>
						</ul>
					</li>
				<li>School Schedule</li>
			</ul>";
	}
	else {
		echo "<ul>
				<li>School Schedule</li>
				</ul>";
	}


?>
<?php 
 	$role = "admin";
 	switch ($role) {
 		case 'student':
 			echo "<ul>
				<li>Grades</li>
				<li>School Scheduale</li>
			</li>";
 			break;
 		case 'admin':
 		case 'profesor':
 			echo "<ul>
						<li>Students
							<ul>
								<li>Grades</li>
							</ul>
						</li>
					<li>School Schedule</li>
				</ul>";
 			break;
 		default:
 			echo "<ul>
						<li>School Schedule</li>
				</ul>";
 			break;
 	}


?>


</body>
</html>