<?php

	session_start();
	//sekogas $_SERVER gi vita so golemi bukvi
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		require 'db.php';
		//get values from inputs
		$username = trim($_POST['username']);
		$password = trim($_POST['password']);
		$firstname = trim($_POST['firstname']);
		$lastname = trim($_POST['lastname']);
		$dob = trim($_POST['dob']);
		$phone = trim($_POST['phone']);
		$email = trim($_POST['email']);
		$gender = trim($_POST['gender']);

		//read the file
		$profile =  $_FILES['profile'];

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
		}else if(checkIfUsernameExist($email, 'email')){
			$errors['email'] = 'Email is taken';
		}
		// if($gender == ''){
		// 	$errors['gender'] = 'Gender is required';
		// }
		if ($profile['error'] != UPLOAD_ERR_OK) {
			$errors['profile'] = 'There was a problem with the file.';
		}

		if(!empty($errors)){
			if(isset($_POST['ajax'])){
				//json_encode ja pretvora nizata vo json objekt
				$jsonResponse = [

					'success' => false,
					'errors' => $errors

				];
				//json_encode od dadena niza pravi json struktura
				echo json_encode($jsonResponse);
				exit;
				//ako e ajax i ima greski kodot zvarsuva tuka
			}else{
				$_SESSION['errors'] = $errors;
				$_SESSION['values'] = $_POST;
			}						
		}else{
			//ako e se vo red, treba da gi vneseme vo baza
			if (move_uploaded_file($profile['tmp_name'], 'uploads/' . $profile['name'])) {
				$insertArray = array_merge($_POST, ['profile' => $profile['name']]);
				// var_dump($insertArray);
				insertUser($insertArray);
			}

		}
	}

	//bidejki koristeme ajax mora pak proverka oti na browserot header samo niso ne mu znachi
	if(isset($_POST['ajax'])){
		$jsonResponse = [

			'success' => true,
			'location' => 'list.php'

		];

		echo json_encode($jsonResponse);
		exit;

	}else{
		header('Location: list.php');
		exit;
	}

header('Location: register.php');
	

?>