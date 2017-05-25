<?php
session_start();

//var_dump($_POST);
//var_dump($_SERVER['REQUEST_METHOD']);

if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $remember = isset($_POST['rememberme']) ? TRUE : FALSE;
    $errors = FALSE;
    
    //validate the imputs
    if(trim($email) ==''){
        //error email
        $errors = TRUE;
        $_SESSION['error_email'] = 'Email is required';
    }
     if(trim($pass) ==''){
        //error password
         $errors = TRUE;
         $_SESSION['error_password'] = 'Password is required';
    }
    //If there are errors
    if($errors) {
        $_SESSION['entered_email'] = $email;
        $_SESSION['rememberme'] = $remember;
        header('Location: login.php');
    } else {
        //check db
        require 'dbs.php';
        foreach($users as $user){
            if($user['email'] == $email && $user['password'] == $pass){
                //all good
                //login user
                $_SESSION['logged_in'] = $email;
                if($remember) {
                setcookie("user", $email, time()+3600); //coockie expire in one hour
                }
                header('Location: admin.php');exit;
            }
        }
        $_SESSION['entered_email'] = $email;
        $_SESSION['error_password'] = "Wrong email or password";
        header('location: login.oho');exit;
    }
}