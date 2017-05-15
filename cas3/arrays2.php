<?php

	$info = [
		'name' => 'John',
		'lastName' => 'Thomas',
		'age' => 69
	];

 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>Associative Arrays</title>
		<style>
			ul{
				list-style: none;
				margin: 0;
				padding: 0;
			}
			td, th{
				border: 1px solid #ccc;
			}
			td{
				text-align: center;
			}
		</style>
	</head>
	<body>
		<p>
			<?php
				echo "My name is {$info['name']}, my last name is {$info['lastName']}, and I am " . $info['age'] . " years old.";
			 ?>
			 </p>
			<?php
			 	$info['lastName'] = 'Doe';
			 	echo $info['lastName'];

			 	// add new key/value to the array
			 	$info['yearOfBirth'] = 1958;

			 	echo "<hr />";
			 ?>
			<table>
			 	<tr>
			 		<th>Description</th>
			 		<th>Value</th>
			 	</tr>
			<?php 
			 	foreach ($info as $key => $value){
			 		echo "<tr>";
			 		echo "<td> $key</td><td>$value</td>";
			 		echo "</tr>";
			 	}
			 ?>
			</table>

			<?php
				echo "<pre>";
				print_r($info);
				echo "</pre>";

				$info['subjects'] = ['UI/UX', 'JS', 'PHP'];
				var_dump($info);
				echo $info['subjects'][1]. '<hr />'
			 ?>

			<table>
			 	<thead>
			 		<th>Description</th>
			 		<th>Value</th>
			 	</thead>
			<?php 
			 	foreach ($info as $key => $value){
			 		echo "<tr>";
			 		echo "<td>$key</td>";
			 		if($key == 'subjects'){
			 			echo "<td><ul>";
			 			// foreach($value as $subjects){
			 			// 	echo "<li>$subjects</li>";
			 			// }
			 			for($i=0; $i<count($value); $i++){
			 				echo "<li>{$value[$i]}</li>";
			 			}
			 			echo "</ul></td>";
			 		} else{
			 			echo "<td>$value</td>";	
			 		}
			 		echo "</tr>";
			 	}
			 ?>
			</table>


			<?php
				$products = [
					['TIR', 'Tires', 100],
					['OIL', 'OIL', 10],
					['SPK', 'Spark Plugs', 4]
				];

			 ?>

			 <table>
				<thead>
			 		<th>Code</th>
			 		<th>Description</th>
			 		<th>Price</th>
			 	</thead>
			 	<?php 
			 		foreach ($products as $value){
			 			echo "<tr>";
			 				foreach ($value as $array){
			 					echo "<td>$array</td>";
			 					break;
			 				}
			 				foreach ($value as $array){
			 					echo "<td>$array</td>";
			 					break;
			 				}
			 				foreach ($value as $array){
			 					echo "<td>$array</td>";	
			 					break;
			 				}
			 			echo "<tr>";
			 		}


			 	 ?>	

			 </table>

			 <?php

				$infoNew['subjects'] = [
					'UI/UX' => 10,
					'JS' => 8,
					'PHP' => 7
				];
				
			  ?>
			</table>
	</body>
</html>