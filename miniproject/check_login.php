<?php
	//treba da stoi pred bilo kakov html da imame na stranata  
	session_start();
	var_dump($_POST);
	// var_dump($_SERVER['REQUEST_METHOD']);
	if($_SERVER['REQUEST_METHOD'] == 'POST'){

		$email = $_POST['email'];
		$pass = $_POST['password'];
		//ako e stiklirano rememember me, smesti true ako ne false
		$remember = isset($_POST['rememberme']) ? true : false;
		$errors = false;

		//validate the inputs
		if(trim($email) == ''){
			//error email
			$errors = true;
			$_SESSION['error_email'] = 'Email is required.';
		}

		if(trim($pass) == ''){
			//error password
			$errors = true;
			$_SESSION['error_password'] = 'Password is required.';
		}

		//if there are errors
		if($errors){
			//vnesena email adresa
			$_SESSION['entered_email'] = $email;
			//setirame cookie sto ke trae 1h
			$_SESSION['rememberme'] = $remember;
			header('Location: login.php');
		}else{
			//if there are no mistakes check/verificate email
			require 'db.php';
			foreach ($users as $user) {
				if($user['email'] == $email && $user['password'] == $pass){
					//all good
					//login the user
					$_SESSION['logged_in'] = $email;
					//ako korisnikot e logiran togas sakam da setiram cookie
					if($remember){
						setcookie("user", $email, time()+3600);
					}
					//go prenasocuvame korsinikot do odredena strana samo ako e logiran
					header('Location: admin.php');exit;
				}
			}

		//ako nema greski i ne pronajdeme soodveten korisnik vo baza, mu prikazuvame od nekoja promenaliva greska i go prenasocuvame
		$_SESSION['error_password'] = "Wrong email or password.";
		header('Location: login.php');exit;

		}

	}

	//var_dump($_SESSION);


?>