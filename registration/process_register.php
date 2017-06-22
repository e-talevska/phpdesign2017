<?php
session_start();
// check the requested method
if($_SERVER['REQUEST_METHOD'] == "POST"){
    require 'db.php';
    //get values from the input
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $firstName = trim($_POST['firstname']);
    $lastName = trim($_POST['lastname']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
    //$gender = isset($_POST['gender']) ? trim($_POST['gender]) : '';
    $dob = trim($_POST['dob']);
    
    //Validate the values
    $errors = [];
    
    if($username == '') {
        $errors['username'] = 'Username is required';
    } else if(checkifUsernameExists($username)) {
        $errors['username'] = 'Username is taken';
    }
    if($pass == '') {
        $errors['password'] = 'Password is required';
    }
    if($firstName == '') {
        $errors['firstname'] = 'Firstname is required';
    }
    if($lastName == '') {
        $errors['lastname'] = 'Lastname is required';
    }
   // if($phone == '') {
   //     $errors['phone'] = 'Phone is required';
   // }
    if($email == '') {
        $errors['email'] = 'Email is required';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $errors['email'] = 'Email is not valid';
    } else if(checkifUsernameExists($email, 'email')) {
        $errors['email'] = 'Email is taken';
    }
    if($gender == '') {
        $errors['gender'] = 'Gender is required';
    }
    if($dob == '') {
        $errors['dob'] = 'Date of birth is required';
    }
    if(!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['values'] = $_POST;
    } else {
        //all god
        insertUser($_POST);
        header("Location: list.php");exit;
    }
}
header("Location: register.php");exit;
