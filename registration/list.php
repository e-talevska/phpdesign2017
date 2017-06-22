<?php 
require 'db.php';
$users = fetchUsers();
var_dump($users);
?>

<!DOCTYPE html>
<html>
<head>
	<title>list of the users</title>
</head>
<body>

	<table>
		<tr>
			<th>Username</th>
			<th>First name</th>
			<th>Last name</th>
		</tr>
		<?php 
			foreach ($users as $user){
			echo "<tr>"
					."<td>{$user['username']}</td>"
					."<td>{$user['firstname']}</td>"
					."<td>{$user['lastname']}</td>"
				."</tr>";
			}
		?>
	</table>

</body>
</html>