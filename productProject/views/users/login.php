<?php
session_start();
$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];
    
    if(trim($email) == '') {
        $errors['email'] = 'Email is required';
    }
    
    if(trim($password) == '') {
        $errors['password'] = 'Password is required';
    }
    
    if(empty($errors)) {
        require '../../models/User.php';
        $user = new \SEDC\DB\User();
        if($user->fetchByEmail($email) == FALSE) {
            $errors['password'] = 'Wrong email/password';
        } else {
            if(password_hash($password, PASSWORD_DEFAULT) == $user->password) {
                //ok
                $_SESSION['logged_in'] = $email;
                header("Location: ./views/offices/list.php");exit;
            } else {
                $errors['password'] = 'Wrong email/password';
            }
        }
    }
}

var_dump($errors);
?>
<html>
    <head>
        <title>Login</title>
    </head>
    <body>
        <h1>Login</h1>
        <form method="POST" >
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input value="" name="email" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
              <p class="help-block"></p>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
              <p class="help-block"></p>
            </div>
            <button name="login" type="submit" class="btn btn-default">Submit</button>
        </form>
    </body>
</html>
