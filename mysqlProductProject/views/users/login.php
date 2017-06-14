<?php

	session_start();

	if(isset($_SESSION['logged_in'])){
		header('Location: ../offices/list.php');exit;
	}

	$errors = [];
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$email = $_POST['email'];
		$password = $_POST['password'];

		if(trim($email) == ''){
			$errors['email'] = 'Email is required.';
		}
		if(trim($password) == ''){
			$errors['password'] = 'Password is required';
		}

		if(empty($errors)){
			require '../../models/user.php';
			$user = new \SEDC\DB\User();
			//ako nekoj ne vnese tocen email ili password
			if($user->fetchByEmail($email) == false){
				$errors['password'] = 'Wrong email or passowrd.';
			}else{
				//proveri dali e pass ist kako vo baza
				if(password_verify($password, $user->password)){
					//koristeme sesija za da zacuvame deka userot se logiral, ako ja imame vrednosta vo sesija znaci se logiral
					//so $email znaeme koj korisnik vo daden moment se logiral
					$_SESSION['logged_in'] = $email;
					$_SESSION['fullName'] = $user->fullName;
					//$realPath = realPath('../offices/list.php');
					header('Location: ../offices/list.php');exit;
				}else{
					$errors['password'] = 'Wrong email / passowrd.';
				}
			}
		}

	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Login Form</title>
</head>
<body style="font-family: Arial; color: #333;">
	<h1>Login Form</h1>
	<form method="POST">
		<div style="margin: 10px;">
			<label for="email">Email: </label>
			<input type="email" name="email" id="email">
			<p class="help-block"><?php if(isset($errors['email'])){ echo $errors['email'] ? $errors['email'] : '';; } ?></p>
		</div>
		<div style="margin: 10px;">
			<label for="password">Password: </label>
			<input type="password" name="password" id="password">
			<p class="help-block"><?php if(isset($errors['password'])){ echo $errors['password'] ? $errors['password'] : '';; } ?></p>
		</div>
		<button type="submit" name="login" style="margin: 10px;">Log In</button>
	</form>
</body>
</html>