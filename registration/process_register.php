<?php
session_start(); 
if($_SERVER['REQUEST_METHOD'] == "POST"){
//gi cita vrednostite od db.php
	require 'db.php';
	// var_dump($_POST);exit;
//kreirame promenlivi za zemanje na vrednosta od inputite
	$username = trim($_POST['username']);
	$pass = trim($_POST['password']);
	$firstName = trim($_POST['firstname']);
	$lastName = trim($_POST['lastname']);
	$phone = trim($_POST['phone']);
	$email = trim($_POST['email']);
	$gender =trim($_POST['gender']);
	$dob = trim($_POST['dob']);

	$profile = $_FILES['profile']; //array
	// var_dump($profile);

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

	if($profile['error'] != UPLOAD_ERR_OK){
		$errors['profile'] = "Upload failed.Please try again.";
	}

	if(!empty($errors)){
		if(isset($_POST['ajax'])){
			$jsonResponse = [
				'success' => false,
				'errors' => $errors
			];

			echo json_encode($jsonResponse);
			exit;
		}else{

			$_SESSION['errors'] = $errors;
			$_SESSION['values'] = $_POST;
		}
	} else{
		//all good, vnesuvame podatoci vo baza 
		if(move_uploaded_file($profile['tmp_name'],'uploads/'.$profile['name'])){
			// $_POST['profile'] = $profile['name']; - polosa opcija zatoa sto ja menuva strukturata na $_POST
			$insertArray = array_merge($_POST, ['profile' => $profile['name']]);
			insertUser($insertArray);
		}
		
		if(isset($_POST['ajax'])){
			$jsonResponse = [
				'success'=>true,
				'location'=> 'list.php'
			];

			echo json_encode($jsonResponse);
			exit;
		}else {
			header("Location: list.php");exit;	
		}
		
	}
	
}

header("Location: register.php");exit;	

?>