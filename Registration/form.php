<?php
session_start();
// var_dump($_SESSION);
$errors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];
unset($_SESSION['errors'], $_SESSION['values']);
 ?>

<!DOCTYPE HTML>
<html>
	<head>
		<title>Register</title>
	</head>
	<body>
		<h1>Register</h1>
		<form method="POST" action="registration.php">
			<div>
				<input value="<?php echo isset($values['username']) ? $values['username'] : ''; ?>" type="text" name="username" placeholder="Username">
				<p class="errors"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></p>
			</div>
			<div>
				<input type="password" name="password" placeholder="Password">
				<p class="errors"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>
			</div>
			<div>
				<input value="<?php echo isset($values['firstName']) ? $values['firstName'] : ''; ?>" type="text" name="firstName" placeholder="First Name">
				<p class="errors"><?php echo isset($errors['firstName']) ? $errors['firstName'] : ''; ?></p>
			</div>
			<div>
				<input value="<?php echo isset($values['lastName']) ? $values['lastName'] : ''; ?>" type="text" name="lastName" placeholder="Last Name">
				<p class="errors"><?php echo isset($errors['lastName']) ? $errors['lastName'] : ''; ?></p>
			</div>
			<div>
				<input value="<?php echo isset($values['dob']) ? $values['dob'] : ''; ?>" type="date" name="dob" placeholder="Date Of Birth">
				<p class="errors"><?php echo isset($errors['dob']) ? $errors['dob'] : ''; ?></p>
			</div>
			<div>
				<input type="text" name="phone" placeholder="Phone">
				<p class="errors"></p>
			</div>
			<div>
				<input value="<?php echo isset($values['email']) ? $values['email'] : ''; ?>" type="email" name="email" placeholder="Email">
				<p class="errors"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
			</div>
			<div>
				<?php $gender = isset($values['gender']) ? $values['gender'] : ''; ?>
				<select name="gender">
					<option <?php if($gender == ''){ echo 'selected'; } ?> value="">Select Gender</option>
					<option <?php if($gender == 'm'){ echo 'selected'; } ?> value="m">Male</option>
					<option <?php if($gender == 'f'){ echo 'selected'; } ?> value="f">Female</option>
					<option <?php if($gender == 'o'){ echo 'selected'; } ?> value="o">Other</option>
				</select>
				<p class="errors"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></p>
			</div>
			<div>
				<button type="submit" name="register">Register</button>
			</div>
		</form>
	</body>
</html>