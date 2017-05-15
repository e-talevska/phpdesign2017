<?php date_default_timezone_set('Europe/Skopje'); ?>




<!DOCTYPE html>
<html>
<head>
	<title>Control Structure</title>
</head>
	<body>

	<?php echo date('Y-m-d H:i:s'); ?>

	<?php  if(date('H') >= 19 )	{

			echo "<h3>Good evening</h3>";
        }		else  if(date('H')<= 10 && date('H') >= 06)  {
        	echo "<h3>Good morning</h3>";

			} 		else {


		echo "<h3>Good afternoon</h3>";
		}				?>

 	<?php 

 		$role ="student";
 		if($role =='student') {
 			echo "<ul> 

 						<li>Grades</li>
 						<li>School shcedule</li>

 			</ul>";

				} else if($role == "admin" || $role == "professor") {
				?>	


					<ul>
						<li>Students</li>
							<ul>
							<li>Grades</li>
							</ul>
						<li>School schedule</li>

					</ul>

				<?php 
			} else {

				echo "<ul> 
					<li> School schedule</li>
				</ul>";



			}

 	?>



	</body>
</html>