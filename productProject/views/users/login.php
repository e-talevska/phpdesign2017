<?php
session_start();
if (isset($_SESSION['logged_in'])) {
	header("Location: ../offices/list.php");exit;
}

$errors = [];

if($_SERVER['REQUEST_METHOD'] == 'POST'){
	$email = $_POST['email'];
	$password = $_POST['password'];

	if (trim($email) == '') {
		$errors['email'] = 'Email is required';
	}

	if (trim($password) == '') {
		$errors['password'] = 'Password is required';
	}

	if (empty($errors)) {
		require '../../models/User.php';
		$user = new \SEDC\DB\User();

		if($user->fetchByEmail($email) == FALSE){
			$errors['password'] = 'Wrong email/password';
		}else{
			if (password_verify($password, $user->password)) {
				//ok
				$_SESSION['logged_in'] = $email;
				$_SESSION['fullName'] = $user->fullName;
				// $realPath = realpath('../offices/list.php');
				header("Location: ../offices/list.php");exit;
			}else{
				$errors['password'] = 'Wrong email/password';
			}
		}
	}
}

 ?>


<!DOCTYPE html>
<html>
<head>
	<title>Users</title>
</head>
<body>
	<h1>Login</h1>

	<form method="POST">
		<div>
			<label for="email">User Name:</label>
			<input type="text" name="email">
		</div>
		<div>
			<label for="password">Password:</label>
			<input type="password" name="password">
		</div>
		<button name="login" type="submit">Login</button>
	</form>


</body>
</html>