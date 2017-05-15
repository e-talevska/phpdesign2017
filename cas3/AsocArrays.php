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
		<title> Associative Arrays </title>	
		<style type="text/css">
			table, th, td {
    		border: 1px solid black;
    		padding: 2px 5px;
			}
			ul{
				list-style: none;
			}
		</style>	
	</head>
	<body>

		<p> <?php echo "My name is {$info['name']}, my last name is {$info['lastName']} and I am {$info['age']} years old."; ?> </p>

		<?php 
			$info['lastName'] = 'Smith';
			echo $info['lastName'] . "<br>" ;

			//Add new key/value pair to the array.
			$info['yearOfBirth'] = 1980;
		?>

		<table>
			<tr>
				<th>Description</th>
				<th>Value</th>
			</tr>
		
		<?php	
			foreach($info as $key => $value){ //$key i $value moze da im dademe bilo koe ime, koe ne treba da se definira
				echo "<tr>";
				echo "<td> $key </td> <td> $value </td> ";
				echo "<tr>";

			}
		?>
		</table>

		<?php 
			
			echo "<pre>";
			print_r($info);
			echo "<pre>";

			$name = "Jane";
			var_dump($info, $name);
			//Go koristime za debagiranje, da ja vidime strukturata i tipot

			// $info['subjects'] = ["UI/UX", "JS", "PHP"];
			// var_dump($info);

			// echo $info['subjects'][1] . "<br>"; //Pristapuvame do vgnezdena indeksna niza

			$info['subjects'] = [
				"UX/UI" => 10,
				"JS" => 7,
				"PHP" => 9
			];
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
				if ($key == 'subjects') {
					echo "<td> <ul>";
					foreach ($value as $subject => $mark) {
					 	echo "<li> $subject: $mark </li>";
					 } 
					// for($i=0; $i<count($value); $i++){
					// 	echo "<li> {$value[$i] }</li>";
					// }
					echo "</ul> </td>";
				} else {
					echo "<td> $value </td>";
				}
				echo "<tr>";

			}
		?>
		</table>

	</body>
</html>