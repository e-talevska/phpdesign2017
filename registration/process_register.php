<?php
session_start();
//check the request method
if($_SERVER['REQUEST_METHOD'] == "POST") {
    require 'db.php';
    //get the values from the inputs
    $username = trim($_POST['username']);
    $pass = trim($_POST['password']);
    $firstName = trim($_POST['firstname']);
    $lastName = trim($_POST['lastname']);
    $phone = trim($_POST['phone']);
    $email = trim($_POST['email']);
    $gender = trim($_POST['gender']);
//    $gender = isset($_POST['gender']) ? trim($_POST['gender']) : '';
    $dob = trim($_POST['dob']);
    
    $profile = $_FILES['profile']; //array
    //validate the values
    $errors = [];
    
    if($username == '') {
        $errors['username'] = 'Username is required';
    } else if(checkIfUsernameExists($username)) {
        $errors['username'] = 'Username is taken';
    }
    
    if($pass == '') {
        $errors['password'] = 'Password is required';
    }
    
    if($firstName == '') {
        $errors['firstname'] = 'First Name is required';
    }
    
    if($lastName == '') {
        $errors['lastname'] = 'Last Name is required';
    }
    
    if($email == '') {
        $errors['email'] = 'Email is required';
    } else if(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = 'Email is not valid';
    } else if(checkIfUsernameExists($email, 'email')) {
        $errors['email'] = 'Email is taken';
    }
    
    if($gender == '') {
        $errors['gender'] = 'Gender is required';
    }
    
    if($dob == '') {
        $errors['dob'] = 'Date of birth is required';
    }
    
    if($profile['error'] != UPLOAD_ERR_OK) {
        $errors['profile'] = "Upload failed";
    }
    
    if(!empty($errors)) {
        $_SESSION['errors'] = $errors;
        $_SESSION['values'] = $_POST;
    } else {
        //all good
        if(move_uploaded_file($profile['tmp_name'], 'uploads/'.$profile['name'])){
//            $_POST['profile'] = $profile['name'];
            $insertArray = array_merge($_POST, ['profile' => $profile['name']]);
//            var_dump($insertArray);exit;
            insertUser($insertArray);
        }
        header("Location: list.php");exit;
    }
}
header("Location: register.php");exit;

