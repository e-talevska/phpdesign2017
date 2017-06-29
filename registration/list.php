<?php 
require 'db.php';
$users = fetchUsers();
//var_dump($users);
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
					."<td>{$user['lastname']}</td>";

					if($user['profile'] != '' && file_exists("uploads/{$user['profile']}")){
					
						// echo "<td><img src='uploads/{$user['profile']}' ></td>";
						echo "<td><a href='download.php?file={$user['profile']}'>Download</a></td>";
					
					}else{
						echo "<td></td>";
					}
				echo "</tr>";
			}
		?>
	</table>

</body>
</html>