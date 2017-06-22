<?php 
session_start();

if($_SERVER['REQUEST_METHOD'] == "POST") {
	require 'db.php';
	$username = trim($_POST['username']);
	$password = trim($_POST['password']);
	$firstName = trim($_POST['firstName']);
	$lastName = trim($_POST['lastName']);
	$date = trim($_POST['dob']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);
	$gender = trim($_POST['gender']);

	$errors = [];

	if ($username == '') {
		$errors['username'] = "Username is required";
	} else if(checkIfUsernameExists($username)){
		$errors['username'] = "Username already exists";
	}

	if ($password == '') {
		$errors['password'] = "Password is required";
	}

	if ($firstName == '') {
		$errors['firstName'] = "First Name is required";
	}

	if ($lastName == '') {
		$errors['lastName'] = "Last Name is required";
	}

	if ($date == '') {
		$errors['dob'] = "Date is required";
	}

	if ($email == '') {
		$errors['email'] = "Email is required";
	} else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
		$errors['email'] = "Email is not valid";
	} else if(checkIfUsernameExists($email, 'email')){
		$errors['email'] = "Email already exists";
	}

	if ($gender == '') {
		$errors['gender'] = "Gender is required";
	}

	if(!empty($errors)){
		$_SESSION['errors'] = $errors;
		$_SESSION['values'] = $_POST;
	} else{
		insertUser($_POST);
		header('Location: list.php');exit;
	}
}
header('Location: form.php');exit;