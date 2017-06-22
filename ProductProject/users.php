<?php
session_start();
if(isset($_SESSION['logged_in'])){
    header('location: /views/offices/list.php');exit;
}
$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(trim($email) == ''){
        $errors['email'] = 'Email is required';
    }
    
    if(trim($password) == ''){
        $errors['password'] = 'Password is required';
    }
    
    if(empty($errors)){
        require 'models/user.php';
        $user = new \SEDC\DB\User();
        if($user->fetchByEmail($email) == FALSE){
            $errors['password'] = 'Wrong email or password';
        } else{
//            var_dump($user);
            if(password_verify($password, $user->password)){
                $_SESSION['logged_in'] = $email;
                $_SESSION['fullName'] = $user->fullName;
                $realPath = realpath('/offices/list.php');
                    header('location: views/offices/list.php');exit;
            } else{
                $errors['password'] = 'Wrong email or password';
            }
        }
    }
}
//var_dump($errors);
?>
<html>
    <head>
        <title>Users</title>
        <style>
            .error{
                background-color: red;
                padding: 0;
                margin: 0;
                width: 200px;
            }
            label{
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Login</h1>
        <form method="POST">
            <div>
                <label for="email">Email</label>
                <input value="" type="text" name="email" id="email" />
                <p class="error"></p>
            </div>
            <div>
                <label for="password">Password</label>
                <input value="" type="password" name="password" id="password">
                <p class="error"></p>
            </div>
            <div>
                <button type="submit" name="create">Create</button>
            </div>
        </form>
    </body>
</html>

