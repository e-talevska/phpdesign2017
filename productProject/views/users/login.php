<?php
	session_start();
	//Ako postoi vo sesija, prenasoci go vo:
	if(isset($_SESSION['logged_in'])) {
		header("Location: ../offices/list.php"); exit; //Odma exit za da ne ja izvrshuva cela skripta.
	}
	$errors = [];
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$email = $_POST['userName'];
		$password = $_POST['password'];

		if(trim($email) == '') {
			$errors['email'] = 'Email is required';
		}
		if(trim($password) == '') {
			$errors['password'] = 'Password is required';
		}
		if(empty($errors)) {
			require '../../models/User.php';
			$user = new \SEDC\DB\User();
			if($user->fetchByEmail($email) == FALSE) {
				$errors['password'] = "Wrong email/password";
			} else {
				if(password_verify($password, $user->password)) {
					//ok
					//Ako postoi kluc logged_in i vrednost $email, odvedi go vo listata:
					$_SESSION['logged_in'] = $email;
					$_SESSION['fullName'] = $user->fullName;
					//$realPath = realpath('../offices/list.php');
					header("Location: ../offices/list.php"); exit;
				} else {
					$errors['password'] = 'Wrong Email/Pass';
				}
			}
		} 

	}
?>


<!DOCTYPE html>
<html>
	<head>
		<title> Users </title>
		<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	</head>
	<body>

		<h1 class="col-md-offset-1"> Login </h1>
		<form method="POST">
		<div class="row">
			<div class="form-group col-md-offset-1">
				<label for="userName"> User Name </label>
				<input type="text" name="userName" class="form-control"> 
			</div>
			<div class="form-group col-md-offset-1">
				<label for="password"> Password </label>
				<input type="password" name="password" class="form-control"> 
			</div>
			<div class="col-md-offset-1">
				<button type="submit" class="btn btn-default">Submit</button>
			</div>
		</div>

		</form>


	</body>
</html>