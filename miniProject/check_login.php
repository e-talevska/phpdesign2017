<?php
session_start();

var_dump($_POST);
if($_SERVER ['REQUEST_METHOD']== 'POST'){
    
    $email = $_POST['email'];
    $pass = $_POST['password'];
    $remember = isset($_POST['rememberme']) ? TRUE : FALSE;
    $errors = FALSE;

    //validate the inputs
    if(trim($email) == ''){
        //error email
        $errors =TRUE;
        $_SESSION['error_email'] = 'Email is required';
    }
    
    if(trim($pass) == ''){
        //error password
        $errors =TRUE;
         $_SESSION['error_password'] = 'Password is required';
    }
}
//if there are errors
if($errors == TRUE){
    $_SESSION['entered_email']=$email;
    $_SESSION['rememberme'] =$remember;
    header('Location: login.php');
}else {
    //check db
    require 'db.php';
    foreach ($users as $user){
        if($user['email'] == $email && $user['password'] == $pass){
            //all good
            //login user
            $_SESSION['logged_in'] = $email;
            if($remember){
            setcookie("user", $email, time() + 3600); //expire in one hour
            }
            header('Location: admin.php');exit;
        }
    }
    $_SESSION['entered_email']=$email;
    $_SESSION['error_password'] = 'Wrong email or password';
    header('Location: login.php');exit;
}




