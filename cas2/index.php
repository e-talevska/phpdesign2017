

<?php date_default_timezone_set ( 'Europe/Skopje' ); ?>



<!DOCTYPE html>
<html>
<head>
	<title>Control Structures</title>
</head>
<body>


<?php echo date('Y-m-d H:i:s'); ?>
<?php if(date('H') >= 17) {
	echo "<h3>Good evening</h3>";
	} else if(date('h') <= 10 && date('H') >= 06){
		echo"<h3>Good morning</h3>";
	} 
	else{
		echo"<h3>Good afternoon</h3>";
		} ?>



		<?php 
		$role = "professor";

		if($role == 'student') {
	echo "<ul><li>Grades</li><li>School schedule</li>
	</ul>";
	} else if($role == 'professor'){
		?>
		<ul>
			<li>Students
				<ul>
					<li>Grades</li>
				</ul>
			</li>
			<li>School schedule</li>
		</ul>
	<?php } 


	
	else{
		echo"<ul><li>School schedule/li></ul>";
		} ?>

	<?php 
		switch($role){
			case "student":
				echo "<ul><li>Grades</li><li>School schedule</li></ul>";
				break;
			case "professor":
				echo "<ul><li>Students<ul><li>Grades</li></ul></li><li>School schedule</li></ul>";
				break;
			default:
				echo "<ul><li>School schedule</li></ul>";
				break;
		}


		 ?>

		 
</body>
</html>