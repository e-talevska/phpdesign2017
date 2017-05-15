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
	<title>Associative arrays</title>
</head>
<body>

		<p><?php echo "My name is {$info['name']}, my last name is {$info['lastName']} and I am {$info['age']} years old";
		
		?>
			
		</p>
		<?php 
			$info['lastName'] = "Smith";
			echo $info['lastName']. "<br>";

			//add new key/value pair to the array
			$info['yearOfBirth'] = 1980;
			?>
			<table border="1">
				<tr>
					<th>Description</th>
					<th>Value</th>

				</tr>	
			
			<?php
			foreach($info as $key => $value){
				echo "<tr >";
				echo "<td>$key</td><td>$value</td>";
				echo "</tr>";
				// za pecatenje	echo "$key => $value <br>";

			}

		?>
		</table>

		<?php
			// za printanje za da vidime sto ima vo niza ili vo baza pred da pocneme da rabotime
			echo "<pre>";
			print_r($info);
			echo "</pre>";

			// $name = "Jane";
			// var_dump($info,#name);

			// $info['subjects'] = ["UX/UI", "JS", "PHP"];
				$info['subjects'] = [
				"UX/UI" => 10,
				"JS" => 7,
				"PHP" => 9
				];
			var_dump($info);

			echo $info['subjects']["JS"]. "<br>";


		?>
		<table border="1">
				<tr>
					<th>Description</th>
					<th>Value</th>

				</tr>	
			
			<?php
			foreach($info as $key => $value){
				echo "<tr >";
				echo "<td>$key</td>";
				if($key == 'subjects'){
					echo "<td><ul>";
					foreach ($value as $subject => $mark) {
					echo "<li>$subject</li>";
					}
					//for($i=0;$i<count($value);$i++){
					//	echo"<li>{$value[$i]}</li>";
					//}
					echo "</ul></td>";
				}
				 else {
				 	echo "<td>$value</td>";
				 }
				echo "</tr>";

			}

		?>
		</table>

</body>
</html>