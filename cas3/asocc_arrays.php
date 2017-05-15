<?php 

	$info = [
		'name' => 'John',
		'lastName' => 'Doe',
		'age' => 30


	];


	$products = [

		'Code' => ['TIR','Tires',100],
		'Description' => ['OIL','Oil',10],
		'Price' => ['SPK','Spark Plugs',100]

	];

// var_dump($products);

 ?>



<!DOCTYPE html>
<html>
<head>
	<title>Associative arrays</title>
</head>
	<body>
	<p><?php echo "My name is {$info['name']}, my last name is {$info['lastName']} and I am {$info['age']} years old"; ?></p>

	

	<?php 

		$info['lastName'] = "Smith";
		echo $info['lastName'] . "<br>";
		echo"<pre>";
	 print_r($info); 
	 echo"</pre>";
	 $name = "Jane";
	 var_dump($info, $name);

	 $info['subjects'] = ['UI/UX', 'JS', 'PHP'];
	 var_dump($info, $name);

	 echo $info['subjects'][1] . "<br>";

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
			echo "<td> $key </td>";
			if($key == 'subjects'){
				echo "<td><ul>";
				// foreach($value as $subject){
				// 	echo "<li>$subject</li>";
				// }
				for($i=0; $i<count($value); $i++){
					echo "<li>$value[$i]</li>";
				}

				echo "</ul></td>";
			}
			else{
			echo "<td> $value </td>";
			}
			echo "</tr>";

		}

	 ?>


	 </table>

	 <table>
			<tr>
				<th>Code</th>
				<th>Description</th>
				<th>Price</th>
			</tr>

			<?php 


				foreach($products as $value){
					echo "<tr>";
					foreach($value as $productInfo){
					
					echo "<td> $productInfo </td>";
					
				}
				echo "</tr>";
			
				// foreach($value as $subject){
				// 	echo "<li>$subject</li>";
				// }
				

			
			
			

		}

	 ?>


			 ?>

	</table>



	</body>
</html>