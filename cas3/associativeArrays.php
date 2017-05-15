<?php 

	// associative array- samite go zadavame index-ot
	$info = [
		'name' => 'John',
		'lastName' => 'Doe',
		'age' => 30
	];

?>

<!DOCTYPE html>
<html>
<head>
	<title>Associative array</title>
</head>
<body>
	<p><?php echo "My name is {$info['name']}, my last name is {$info['lastName']} and i am {$info['age']} years old."; ?></p>

	<?php 

	//promena na vrednost
		$info['lastName'] = 'Smith';
		echo $info['lastName'] . "<br>";

	//dodavanje na kluc/vrednost
		$info['yearOfBirth']= 1987;
	?>
	<table>
		<tr>
			<th>Description:</th>
			<th>Value:</th>
		</tr>

		<?php
		//foreach 1 vrednost - imeto na nizata, 2 vrednost - (so $value site vrednosti gi lista,podredeno), so $key + klucot 
			foreach($info as $key => $value){
				echo "<tr>";
				echo "<td>$key:</td><td>$value</td>";
				echo "</tr>";
			}
		?>
	</table>
	
	<?php
		//pecatenje na cela niza(samo za nizi) 
		echo"<pre>";
		print_r($info);
		echo"</pre>";

		//informacii za iskoristuvanje i tipo na varijablite
		
		$info['subjects'] = ['UI/UX', 'JS', 'PHP'];
		var_dump($info);

		echo $info['subjects'][1] . "<br>";
	?>
<!-- poradi razlicniot tip na vrednostite(stringovi so niza) koristime vakva struktura -->
	<table>
		<tr>
			<th>Description:</th>
			<th>Value:</th>
		</tr>

		<?php 
			foreach($info as $key => $value){
				echo "<tr>";
				echo "<td>$key</td>";

				if($key == 'subjects'){
					echo "<td><ul>";
						// foreach($value as $subject){
						// 	echo "<li>$subject</li>";
						// }
					
					for($i=0;$i<count($value);$i++){
						echo "<li>{$value[$i]}</li>";
					}

					echo "</ul></td>";
				} else {
					echo "<td>$value</td>";
				}
				
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>