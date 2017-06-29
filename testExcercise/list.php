<?php
require 'db.php';
$users = fetchUsers();
//var_dump($users);
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
				<th>Image</th>
			</tr>
			<?php

				foreach ($users as $user ) {
					echo "<tr>"
					. "<td>{$user['username']}</td>"
					. "<td>{$user['firstname']}</td>"
					. "<td>{$user['lastname']}</td>";
					if($user['profile'] != '' && file_exists("uploads/{$user['profile']}")){
						// echo "<td><img src='" . "uploads/{$user['profile']}" . "'/></td>";
						echo "<td><a href='download.php?file=" . $user['profile'] ."'>download</a></td>";
					}else{
						echo "<td> </td>";
					}
					echo "</tr>";
				}

			 ?>
		</table>
	</body>
</html>