<?php 
	
	$info = [
		'name' => 'John',
		'lastName' => 'Doe',
		'age' => 30
	];


 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays</title>
</head>
<body>

<p><?php echo "My name is {$info['name']}, My Last name is {$info['lastName']}, and I am". $info['age'] ." years old" ?></p>


<?php 
		
	$info['lastName'] = "Smith";
	echo $info['lastName']."<br>";


	// Add new key/value pair to the array
	$info['yearOfBirht'] = 1988;
	echo "<br>";
	echo $info['yearOfBirht'];
	?>

	<table>
		<tr>
			<th>Description</th>
			<th>Value</th>
		</tr>

	<?php
	//ciklus za vrednosti od nizata
	foreach($info as $value){
		echo $value."<br>";
	}

	// Ciklus i za kluc i za vrednosti od nizata
	foreach ($info as $key => $value) {
		echo "<tr>";
		echo "<td>$key</td><td>$value</td>";
		echo "<tr>";
	}
?>
</table>
	
	<!-- prikazuvanje na vrednosti od niza  -->
	<?php 
	echo "<pre>";
	print_r($info);
	echo "</pre>";

	//vgnesduvanje na niza vo niza
	$info['subjects'] = [
	"UI/UX" => 10,
	 'JS' => 9,
	  'PHP' => 9,
	  ];

	// prikazuvanje na detali za nisi 
	$name = "Jane";
	var_dump($info, $name);


	echo $info['subjects']["JS"]."<br>";
	 ?>

	 <table>
		<tr>
			<th>Description</th>
			<th>Value</th>
		</tr>

	<?php

	// Ciklus i za kluc i za vrednosti od niza vo niza
	foreach ($info as $key => $value) {
		echo "<tr>";
		echo "<td>$key</td>";
		if($key == 'subjects'){
			echo "<td><ul>";
			foreach ($value as $subjects => $mark) {
				echo "<li>$subjects: $mark</li>";
			}
			echo "</ul></td>";
		}else {
		echo "<td>$value</td>";
		}
		echo "<tr>";
		}
	?>
	</table>


</body>
</html>