<?php
//Ova e sekogash najgore na stranata, ne smee nishto pred ova!
session_start();



	// var_dump($_POST);
	// var_dump($_SERVER['REQUEST_METHOD']);

	// 01 Step: Tale the inputs
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$remember = isset($_POST['rememberme']) ? TRUE : FALSE; //Ako e chekirano ke smestime true, ako ne e ke smestime false.
		$errors = FALSE;
	

	//02 Step: Validate the inputs
	if(trim($email) == ''){
		//error email
		$errors = TRUE;
		$_SESSION['error_email'] = 'Email is required';
	}
	if(trim($pass) == ''){
		//error password
		$errors = TRUE;
		$_SESSION['error_password'] = 'Password is required';
	}
	//If there are errors:
	if ($errors){
		$_SESSION['entered_email'] = $email;
		$_SESSION['rememberme'] = $remember;
		//So header prenasochuvame:
		header('Location: login.php');
	} else {
		//check db
		require 'db.php';
		foreach ($users as $user) {
			if($user['email'] == $email && $user['password'] == $pass){
				//all good; login user
				$_SESSION['logged_in'] = $email;
				 if($remember){
					setcookie("user", $email, time()+3600); //expire in one hour, obichno go ostavame kako shto e, ne dodavame vreme
				}
				header('Location: admin.php'); exit;
			}
		}
		$_SESSION['entered_email'] = $email;
		$_SESSION['error_password'] = "Wrong email or password";
		header('Location: login.php'); exit;
	}
}


?>