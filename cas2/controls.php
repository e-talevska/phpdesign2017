
<?php date_default_timezone_set('Europe/Skopje'); ?>




<!DOCTYPE html>
<html>
	<head>
		<title>Control Structures</title>
	</head>
	<body>
<!-- 
	<ul>
		<li>School schedule</li>
		<li>Students
			<ul>
				<li>Grades</li>
			</ul>
		</li>
		
	</ul> -->


	 
	<?php 


	$person = 'Nekoj';

	if($person == 'Student'){
		echo "$person: <br> <ol>
				<li>Grades</li>
				<li>School schedule</li>
			</ol>";

	} else if($person == 'Admin' || $person == 'Professor'){
		echo "$person: "
	?>

		<br> 
			<ol>
				<li>School schedule</li>
				<li>Students
					<ol>
						<li>Grades</li>
					</ol>
				</li>
			</ol>

	<?php

	} else if($person == 'Receptionist'){
		echo "$person:" 
	?>

		 <br> 
		 <ol>
			<li>School schedule</li>
		</ol>
		
	<?php

	} else{
		echo "Who are you and what are you doing here?";
	}

	?> 



	<!-- \\\\\\\\\\\\\\\\\ nova zadacha -->
	<?php 

	$person = 'Admin';
		switch ($person) {
			case 'Student':
			echo "$person: <br> <ol>
					<li>Grades</li>
					<li>School schedule</li>
				</ol>";
				break;
			case 'Admin': 

			case: 'Professor': 

				echo "$person: " 
	?>
			<br> 
			<ol>
				<li>School schedule</li>
				<li>Students
					<ol>
						<li>Grades</li>
					</ol>
				</li>
			</ol>
			

	<?php
				break;
				default:
				echo "$person:" 
	?>

		 <br> 
		 <ol>
			<li>School schedule</li>
		</ol>
		}
	 ?>


<!-- \\\\\\\\\\\\\\\\\\\ nova zadacha  -->
	<?php




/*	echo date('Y-m-d H:i:s'); 

	if(date('H')<= 11 && date('H') >= 06){
		echo '<h3>Good morning.</h3>';

	} else if(date('H') > 11){
		echo "<h3> Good afternoon. </h3>";

	} else{
		echo "<h3> Good evening. </h3>";
	}
*/




	?>

	</body>
</html>