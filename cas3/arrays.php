<!DOCTYPE html>
<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>

		<?php 
			// $numbers = [5, 6, 7, 8];
			// 		//	0, 1, 2, 3
			// echo 'original array';

			// for ($i=0; $i < count($numbers); $i++) { 
			// 	echo "<p>$numbers[$i]</p>";
			// }

			// $numbers[1] = 2;
			// // echo $numbers[1] . "<br>";

			// $numbers[] = 13;
			// // ^ se dodava na krajot od nizata
			// // echo $numbers[];

			// echo "after ~ <br>";
			// 	//  ime na niza, vrednosti za dodavanje
			// array_push($numbers, 34, 65, 24);

			// for ($i=0; $i < count($numbers); $i++) { 
			// 	echo "<p>$numbers[$i]</p>";
			// }

			echo "associative arrays";


			$info = [
				'name' => 'Johanna',
				'lastName' => 'Smith',
				'age' => 22
			];

	 	?>	
	 	<p> <?php echo "My name is {$info['name']}, my last name is {$info['lastName']} and I am {$info['age']} years old."; ?></p>

	 	<!--  mozhe da se napishe $info[promenliva] bez navodnici ILI {$info['promenliva']} -->

	 	<?php 

	 		// menjanje na vrednost
	 		$info['lastName'] = "Smith";
	 		echo $info['lastName'] . "<br>";

	 		// ako ima key sho ne postoi, mozhe da se napishe i ke se dodade
	 		$info['yearOfBirth'] = 1994;

	 		echo $info['yearOfBirth'] . "<br>";
	 	?>

	 	<table>
	 		<tr>
	 			<th>Description</th>
	 			<th>Value</th>
	 		</tr>
	 	



		 	<?php
		 		foreach($info as $key => $value){
		 			echo "<tr>
				 			<td>$key</td>"; 
				 	if($key == 'subjects'){
				 		echo "<td><ul>";
				 			// foreach($value as $subject){
				 			// 	echo "<li>$subject</li>";
				 			// }
				 		for($i=0; $i<count($value); $i++){
				 			echo "<li>$subject[$i]</li>";
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
	 	echo "<pre>";
	 		print_r($info);
	 	echo "</pre>";

	 	$info['subjects'] = ['HTML', "CSS", "JS"];
	 	var_dump($info); // za debagiranje

	 	echo $info['subjects'][1] . "<br>";
	 	?>


		<!--  nova zadacha  -->
	 	<table>
	 		<tr>
	 			<th>Code</th>
	 			<th>Description</th>
	 			<th>Price</th>
	 		</tr>
	 	


	 	<?php 
	 		$products =[
	 				0 => ['TIR', 'Tires', 100],
	 				1=> ['OIL', 'Oil', 10],
	 				2=> ['SPK', 'Spark Plugs', 4]
	 			];

	 		foreach($products as $infoProducts){
	 				echo "<tr>";
	 			foreach($infoProducts as $value){
	 				echo "<td>$value</td>";

	 			}
	 				echo "</tr>";

	 		// 	echo "<tr>";
	 		// 	echo "<td><ul>"; 
	 		// 		for($i=0; $i<count($value); $i++){
				//  		echo "<li>$value[$i]</li>";
				//  	}
				//  echo "</ul></td>";
				// echo "</tr>";

	 		}



	 	 ?>
 	 </table>

	</body>
</html>