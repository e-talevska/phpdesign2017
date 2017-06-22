<?php

	session_start();
	//sekogas $_SERVER gi vita so golemi bukvi
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		require 'db.php';


		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$dob = trim($_POST['dob']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$gender = trim($_POST['gender']);

		//validate the values
		$errors = [];

		if($username == ''){
			$errors['username'] = 'Username is required';
		}else if(checkIfUsernameExist($username)){
			$errors['username'] = 'Username is taken';
		}
		if($password == ''){
			$errors['password'] = 'Password is required';
		}
		if($firstname == ''){
			$errors['firstname'] = 'First name is required';
		}
		if($lastname == ''){
			$errors['lastname'] = 'Last name is required';
		}
		if($dob == ''){
			$errors['dob'] = 'Date of birth is required';
		}
		if($phone == ''){
			$errors['phone'] = 'Phone is required';
		}
		if($email == ''){
			$errors['email'] = 'Email is required';
		}else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
			$errors['email'] = 'Email is not valid.';
		}else if(!checkIfUsernameExist($email, 'email')){
			$errors['email'] = 'Email is taken';
		}
		// if($gender == ''){
		// 	$errors['gender'] = 'Gender is required';
		// }

		if(!empty($errors)){
			$_SESSION['errors'] = $errors;
			$_SESSION['values'] = $_POST;			
		}else{
			//ako e se vo red, treba da gi vneseme vo baza
			$insertUser($_POST);
		}
	}

	header('Location: register.php');exit;

?>