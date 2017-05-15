<!DOCTYPE html>
<html>
<head>
	<title>While 2</title>
</head>
<body>
<table>
	<tr>
		<th>Distance</th>
		<th>Cost</th>
	</tr>
<?php 
$distance = 50;
	while ($distance <= 250){
		/* $cost = $distance/10 varijabla namesto na konkatenacija */
		echo "<tr>
				<td>$distance</td>
				<td>".($distance/10)."</td>
			</tr>";
		$distance += 50;
}
	
?>
</table>


</body>
</html>