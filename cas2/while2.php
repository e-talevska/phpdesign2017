<!DOCTYPE html>
<html>
	<head>
		<title> While, vtora vezba </title>
	</head>
	<body>

		<table>
			<tr>
				<th> Distance </th>
				<th> Cost </th>
			</tr>
			
			<?php

				$distance = 50;
				
				while ($distance <= 2250) {
				$cost = $distance/10;

					echo 	"<tr> 
								<td> $distance </td>
								<td> $cost </td>
							</tr>";
					$distance += 50;
				} /* so varijabla, i ja stavame lokalno! */

				// while ($distance <= 2250) {
				// 	echo 	"<tr> 
				// 				<td> $distance </td>
				// 				<td>" .($distance / 10). "</td>
				// 			</tr>";
				// 	$distance += 50;
				// } - so konkatanacija
			?>



			<!-- DO-While, kodot ke se izvrshi barem ednash -->
			<?php
				$distance = 3000;
				 do {
					echo 	"<tr> 
								<td> $distance </td>
								<td>" .($distance / 10). "</td>
							</tr>";
					$distance += 50;
				} 
				while ($distance <= 2250)
			?>
		
		</table>

	</body>
</html>