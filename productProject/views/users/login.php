<?php

session_start();
if(isset($_SESSION['logged_in'])){
    header("Location: ../offices/list.php");exit;
}
$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(trim($email) == '') {
        $errors['$email'] = 'Email is required';
    }
    if(trim($password) == '') {
        $errors['password'] = 'Password is required';
    }
    if(empty($errors)) {
        require '../../models/User.php';
        $user = new \SEDC\DB\User();
        if ($user->fetchByEmail($email) == FALSE) {
            $errors['password'] = 'Wrong email or password';
        } else {
            if(password_verify($password, $user->password)) {
                //ok
                $_SESSION['logged_in'] = $email;
                $_SESSION['fullName'] = $user->fullName;
                $realPath = realpath('../offices/list.php');
                header("Location: ../offices/list.php");exit;
            }
            else {
                $errors['password'] = 'Wrong email or password';
            } 
         }
    }
}
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="POST">
            <div class="form-group">
                <label for="exampleInputEmail">Email address</label>
                <input value="" name="email" type="email" class="form-control" id="exampleInputEmail">
                <p class="help-block"></p>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Password</label>
                <input value="" name="password" type="password" class="form-control" id="exampleInputPassword">
                <p class="help-block"></p>
                <button name="login" type="submit" class="btn btn-default">Submit</button>
            </div>    
        </form>
    </body>   
</html>