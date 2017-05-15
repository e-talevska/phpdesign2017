<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
$pruducts = [
	0 => ['Tir', 'Tired', 100],
	1 => ['OIL', 'Oil', 10],
	2 => ['SPK', 'Spar Plugs', 4]
	];
?>
<table>
	<tr>
		<td>Code</td>
		<td>Description</td>
		<td>Price</td>
	</tr>
	<?php 
		foreach ($pruducts as $infoProducts){
			// var_dump($infoProducts);
			echo "<tr>";
			foreach ($infoProducts as $value) {
				echo "<td>$value</td>";
			}
			echo "</tr>";
		}
	?>
</table>


</body>
</html>
