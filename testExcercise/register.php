<?php 
	
	session_start();
	//var_dump($_SESSION);
	//za da ne stojat vrednostite i errorite na sekoe vklucuvanje na strana mora da napravime proverka
	$errors =  (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
	$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];
	//remove values, errors from session , we need this to be valid one request
	unset($_SESSION['errors'], $_SESSION['values']);
	// var_dump($errors);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register</h1>
	<form method="POST" action="process_register.php" enctype="multipart/form-data">
		<div>
			<input value="<?php isset($values['username']) ? $values['username'] : ''; ?>" type="text" name="username" placeholder="Username">
			<p class="errors"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['password']) ? $values['password'] : ''; ?>" type="password" name="password" placeholder="Password">
			<p class="errors"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['firstname']) ? $values['firstname'] : ''; ?>" type="text" name="firstname" placeholder="First Name">
			<p class="errors"><?php echo isset($errors['firstname']) ? $errors['firstname'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['lastname']) ? $values['lastname'] : ''; ?>" type="text" name="lastname" placeholder="Last Name">
			<p class="errors"><?php echo isset($errors['lastname']) ? $errors['lastname'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['dob']) ? $values['dob'] : ''; ?>" type="date" name="dob" placeholder="Date of birth">
			<p class="errors"><?php echo isset($errors['dob']) ? $errors['dob'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['phone']) ? $values['phone'] : ''; ?>" type="text" name="phone" placeholder="Phone">
			<p class="errors"><?php echo isset($errors['phone'])  ? $errors['phone'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['email']) ? $values['email'] : ''; ?>" type="email" name="email" placeholder="Email">
			<p class="errors"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
		</div>
		<div>
			<input value="<?php isset($values['profile']) ? $values['profile'] : ''; ?>" type="file" name="profile" placeholder="Profile">
			<p class="errors"><?php echo isset($errors['profile']) ? $errors['profile'] : ''; ?></p>
		</div>
		<div>
			<?php $gender = isset($values['gender']) ? $values['gender'] : ''; ?>
			<select name="gender">
				<option <?php if($gender == '') {echo 'selected ';} ?> value="">Select gender:</option>
				<option <?php if($gender == 'f') {echo 'selected ';} ?> value="f">Female</option>
				<option <?php if($gender == 'm') {echo 'selected ';} ?> value="m">Male</option>
				<option <?php if($gender == 'other') {echo 'selected ';} ?>  value="other">Other</option>
			</select>
		</div>
		<div>
			<button name="register" type="submit" style="margin-top: 20px;">Register</button>
		</div>
	</form>
</body>
</html>