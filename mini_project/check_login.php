<?php
session_start();


//var_dump($_POST);
//var_dump($_SERVER['REQUEST_METHOD'] == 'POST');

	if ($_SERVER['REQUEST_METHOD'] == 'POST') {
		
		$email = $_POST['email'];
		$pass = $_POST['password'];
		$remember = isset($_POST['rememberme']) ? TRUE : FALSE;

		$errors = false;

		//validation on the inputs
	
	//proverka za prazen input
		if (trim($email) == '') {
			
			//error email
			$errors = true;
			$_SESSION['error_email'] = 'Email is required';
		
		}
		
		if (trim($pass) == '') {
			
			//error password
			$errors = true;
			$_SESSION['error_password'] = 'Password is required';

		}
//in case of errors
		if ($errors) {
			$_SESSION['entered_email'] = $email;
			$_SESSION['rememberme'] = $remember;
			header('Location: login.php');
		}else{
			//check db(dali postoi takov korisnik)
			require 'db.php';
			foreach ($users as $user) {
				if($user['email'] == $email && $user['password'] == $pass){
				
				//all good
					//login user
					$_SESSION['logged_in'] = $email;

					if($remember){
					setcookie("user", $email, time()+3600); //expire in one hour
				}
					header('Location: admin.php'); exit;
				}
			}
			$_SESSION['entered_email'] = $email;
			$_SESSION['error_password'] = 'Wrong email or password';
			header('Location: login.php'); exit;
		}
	}


?>