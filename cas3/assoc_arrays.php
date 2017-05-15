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
		<p><?php echo "My name is {$info['name']}, my last name is {$info['lastName']} and I am ".$info['age'] ." years old"; ?></p>

		<?php
			$info['lastName'] = "Smith";
			echo $info['lastName'] . "<br>";

			//add new key/value pair to the array
			$info['yearOfBirth'] = 1980;
		?>
		<table>
			<tr>
				<th>Description</th>
				<th>Value</th>
			</tr>
		
			<?php
				foreach($info as $key => $value){
					echo "<tr>";
					echo "<td>$key</td><td>$value</td>";
					echo "</tr>";
				}
			?>
		</table>

		<?php
			echo "<pre>";
			print_r($info);
			echo "</pre>";

			$info['subjects'] = [
				"UI/UX" => 10, 
				'JS' => 7, 
				"PHP" => 9
			];

			var_dump($info);

			echo $info['subjects']["JS"] . "<br>";
		?>

		<table>
			<tr>
				<th>Description</th>
				<th>Value</th>
			</tr>
		
			<?php
				foreach($info as $key => $value){
					echo "<tr>";
					echo "<td>$key</td>";
					if($key == 'subjects') {
						echo "<td><ul>";
						foreach($value as $subject => $mark){
							echo "<li>$subject: $mark</li>";
						}
						// for($i=0;$i<count($value);$i++){
						// 	echo "<li>{$value[$i]}</li>";
						// }
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