<?php
session_start(); 
if($_SERVER['REQUEST_METHOD'] == "POST"){
//gi cita vrednostite od db.php
	require 'db.php';
//kreirame promenlivi za zemanje na vrednosta od inputite
	$username = trim($_POST['username']);
	$pass = trim($_POST['password']);
	$firstName = trim($_POST['firstname']);
	$lastName = trim($_POST['lastname']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);
	$gender =trim($_POST['gender']);
	$dob = trim($_POST['dob']);

//validacija na inputite
	$errors = [];

	if($username == ''){
		$errors['username'] = 'Username is required';
	} else if(checkIfUsernameExists($username)){
		$errors['username'] = 'This username is taken';

	}
	
	if ($pass == ''){
		$errors['password'] = 'Password is required';
	}

	if($firstName == ''){
		$errors['firstname'] = 'Fisrt name is required';
	}

	if ($lastName == ''){
		$errors['lastname'] = 'Last name is required';
	}

	if ($email == ''){
		$errors['email'] = 'Email is required';
	}
	elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$errors['email'] = 'Email is not valid';
	}
	else if(checkIfUsernameExists($email, 'email')){
		$errors['email'] = 'This email is taken';
	}
	
	if ($gender == ''){
		$errors['gender'] = 'Gender is required';
	}

	if ($dob == ''){
		$errors['dob'] = 'Date of birth is required'; 
	}

	if(!empty($errors)){
		$_SESSION['errors'] = $errors;
		$_SESSION['values'] = $_POST;
	} else{
		//all good, vnesuvame podatoci vo baza 
		insertUser($_POST);
		header("Location: list.php");exit;	
	}
	
}

header("Location: register.php");exit;	

?>