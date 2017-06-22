<?php
require 'db.php';
$users = fetchUsers();
var_dump($users);
 ?>
<!DOCTYPE HTML>
<html>
	<head>
		<title>List Users</title>
	</head>
	<body>
		<table>
			<tr>
				<th>Username</th>
				<th>First Name</th>
				<th>Last Name</th>
			</tr>
			<?php

				foreach ($users as $user ) {
					echo "<tr>"
					. "<td>{$user['username']}</td>"
					. "<td>{$user['firstName']}</td>"
					. "<td>{$user['lastName']}</td>"
					. "</tr>";
				}

			 ?>
		</table>
	</body>
</html>