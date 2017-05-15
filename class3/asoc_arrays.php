<?php 

	$info = [
		'name' => 'John',
		'lastName' => 'Doe',
		'age' => 37
	]
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Associative Arrays</title>
	<style>
		table, th, td{
			border: 1px solid black;
		}
	</style>
</head>
<body>

<!-- All the same below -->
<p><?php echo "My name is {$info['name']}, my last name is {$info['lastName']}, and I am {$info['age']} years old" ?></p>
<p><?php echo "My name is $info[name], my last name is $info[lastName], and I am $info[age] years old" ?></p>
<p><?php echo "My name is " . $info['name'] . ", my last name is " . $info['lastName'] . ", and I am " . $info["age"] . " years old" ?></p>

<!-- Change Last Name -->
<?php 
	$info['lastName'] = 'Smith';
 ?>
<p><?php echo "My name is $info[name], my last name is $info[lastName], and I am $info[age] years old" ?></p>

<!-- Add year of birth -->
<?php 
	$info['yearOfBirth'] = '1980';
 ?>
<p><?php echo "My name is $info[name], my last name is $info[lastName], and I am $info[age] years old, because I was born in" . $info['yearOfBirth'] ?></p><br><br>

<!-- Display object in table -->
<table>
	<th>Description</th>
	<th>Value</th>
	<?php 
		foreach ($info as $key => $value) {
			echo "<tr>
					<td>$key</td>
					<td>$value</td>
				 </td>";
		}
	 ?>
</table>

<?php 
	$info['skills'] = ['HTML', 'CSS', 'JS'];
	var_dump($info);
 ?>


<!-- Display object in table -->
<table>
	<th>Description</th>
	<th>Value</th>
	<?php 
		foreach ($info as $key => $value) {
			echo "<tr>";
					echo "<td>$key</td>";
					if ($key == 'skills') {
						echo "<td><ul>";
								
								foreach ($value as $skills) {
									echo "<li>$skills</li>";
								}
								
							 echo "</ul></td>";
					}else{
					echo "<td>$value</td>";
				 echo "</tr>";
				 	}
		}
	 ?>
</table>


<?php 

	$products = [
				['TIR', 'Tires', 100],
				['Oil', 'Oil', 10],
				['SKP', 'Spark Plugs', 4]
				]
 ?>

 <table>
	<th>Code</th>
	<th>Description</th>
	<th>Value</th>
	<?php 
		foreach ($products as $valueProducts) {
			echo "<tr>";
				// foreach ($value as $products[0]) {
					foreach ($valueProducts as $products) {
						echo "<td>$products</td>";
					 	}
				// }
			echo "</tr>";		
		}
	 ?>
</table>

</body>
</html>