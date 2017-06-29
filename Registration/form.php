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
		<form method="POST" action="registration.php" enctype="multipart/form-data">
			<div>
				<input value="<?php echo isset($values['username']) ? $values['username'] : ''; ?>" type="text" name="username" placeholder="Username" required>
				<p class="errors"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></p>
			</div>
			<div>
				<input type="password" name="password" placeholder="Password" required>
				<p class="errors"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>
			</div>
			<div>
				<input value="<?php echo isset($values['firstName']) ? $values['firstName'] : ''; ?>" type="text" name="firstName" placeholder="First Name" required>
				<p class="errors"><?php echo isset($errors['firstName']) ? $errors['firstName'] : ''; ?></p>
			</div>
			<div>
				<input value="<?php echo isset($values['lastName']) ? $values['lastName'] : ''; ?>" type="text" name="lastName" placeholder="Last Name" required>
				<p class="errors"><?php echo isset($errors['lastName']) ? $errors['lastName'] : ''; ?></p>
			</div>
			<div>
				<input value="<?php echo isset($values['dob']) ? $values['dob'] : ''; ?>" type="date" name="dob" placeholder="Date Of Birth" required>
				<p class="errors"><?php echo isset($errors['dob']) ? $errors['dob'] : ''; ?></p>
			</div>
			<div>
				<input type="text" name="phone" placeholder="Phone">
				<p class="errors"></p>
			</div>
			<div>
				<input value="<?php echo isset($values['email']) ? $values['email'] : ''; ?>" type="email" name="email" placeholder="Email" required>
				<p class="errors"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
			</div>
			<div>
				<?php $gender = isset($values['gender']) ? $values['gender'] : ''; ?>
				<select name="gender" required>
					<option <?php if($gender == ''){ echo 'selected'; } ?> value="">Select Gender</option>
					<option <?php if($gender == 'm'){ echo 'selected'; } ?> value="m">Male</option>
					<option <?php if($gender == 'f'){ echo 'selected'; } ?> value="f">Female</option>
					<option <?php if($gender == 'o'){ echo 'selected'; } ?> value="o">Other</option>
				</select>
				<p class="errors"><?php echo isset($errors['gender']) ? $errors['gender'] : ''; ?></p>
			</div>
			<div>
				<input type="file" name="profile" accept="image/*" required>
				<p class="errors"><?php echo isset($errors['profile']) ? $errors['profile'] : ''; ?></p>
			</div>
			<div>
				<button type="submit" name="register">Register</button>
			</div>
		</form>


		<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js"></script>
		<script>
			$(function(){
				$('form').on('click', function(){
					e.preventDefault();
					var formData = new FormData($(this).get(0));
					// everything else stays the same
				});
				$('form').validate({
				  	submitHandler: function(form, event) {
				  		event.preventDefault();
				  		var formData = new FormData(form);
				  		formData.append("ajax", 1);
				   		$.ajax({
				   			method: "POST",
				   			url: "registration.php",
				   			contentType: false,
				   			processData: false,
				   			data: formData,
				   			dataType: "json",
				   			success: function(data){
				   				if(data.success == true){
				   					// location.href = data.location;
				   					form.reset();
				   					$('body').prepend("<h2>Success</h2>");
				   				} else{
				   					// console.log(data.errors);
				   					var errors = Object.getOwnPropertyNames(data.errors);
				   					errors.forEach(function(propertyName){
				   						$("[name='"+propertyName+"']").next('.errors').text(data.errors[propertyName]);
				   					});
				   				}
				   			},
				   			error: function(error){
				   				console.log(error);
				   			}
				   		});
				  	}
				}); 
			});
		</script>
	</body>
</html>