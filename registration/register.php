<?php
session_start();
//var_dump($_SESSION);
$errors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];
//remove the values from session
//we need these to be valid only request
unset($_SESSION['errors'], $_SESSION['values']);
var_dump($errors);
?>
<html>
    <head>
        <title>Register</title> 
    </head>
    <body>
        <h1>Register</h1>
        <form method="POST" action="process_register.php" enctype="multipart/form-data">
            <div>
                <input value="<?php echo isset($values['username']) ? $values['username'] : ''; ?>" type="text" name="username" placeholder="Username" >
                <p class="error">
                    <?php echo isset($errors['username']) ? $errors['username'] : ''; ?>
                </p>
            </div>
            <div>
                <input type="password" name="password" placeholder="Password" >
                <p class="error"></p>
            </div>
            <div>
                <input type="text" name="firstname" placeholder="First Name" >
                <p class="error"></p>
            </div>
            <div>
                <input type="text" name="lastname" placeholder="Last Name" >
                <p class="error"></p>
            </div>
            <div>
                <input type="date" name="dob" placeholder="Date Of Birth" >
                <p class="error"></p>
            </div>
            <div>
                <input type="text" name="phone" placeholder="Phone" >
                <p class="error"></p>
            </div>
            <div>
                <input type="email" name="email" placeholder="Email" >
                <p class="error"></p>
            </div>
             <div>
                 <?php $gender = isset($values['gender']) ? $values['gender'] : '';  ?>
                 <select name="gender">
                     <option <?php if($gender == '') { echo 'selected=""'; } ?> value="">Select gender</option>
                     <option <?php if($gender == 'm') { echo 'selected=""'; } ?> value="m">Male</option>
                     <option <?php if($gender == 'f') { echo 'selected=""'; } ?> value="f">Female</option>
                     <option <?php if($gender == 'other') { echo 'selected=""'; } ?> value="other">Other</option>
                 </select>
                <p class="error"></p>
            </div>
            <div>
                <input type="file" accept="image/*" name="profile">
                <p class="error"></p>
            </div>
            <div>
                <button type="submit" name="register">Register</button>
            </div>
        </form>
    </body>
</html>
