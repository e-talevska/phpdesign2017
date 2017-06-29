<?php 
session_start();
var_dump($_SESSION);
$errors = (isset($_SESSION['errors'])) ? $_SESSION['errors'] : [];
$values = (isset($_SESSION['values'])) ? $_SESSION['values'] : [];

//remove the values from session,we need these to be valid only one request
unset($_SESSION['errors'], $_SESSION['values']);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Registration</title>
</head>
<body>

	<h1>Register</h1>
	<form method="POST" action="process_register.php" enctype="multipart/form-data">
		<div>
			<input value="<?php echo isset($values['username']) ? $values['username'] : ''; ?>" placeholder="username" type="text" name="username" required>
			<p class="error">
				<?php echo isset($errors['username']) ? $errors['username'] : ''; ?>
			</p>
		</div>
		<div>
			<input required placeholder="password" type="password" name="password" >
			<p class="error"></p>
		</div>
		<div>
			<input required placeholder="firstname" type="text" name="firstname">
			<p class="error"></p>
		</div>
		<div>
			<input required placeholder="lastname" type="text" name="lastname">
			<p class="error"></p>
		</div>
		<div>
			<input required placeholder="date of birth" type="date" name="dob">
			<p class="error"></p>
		</div>
		<div>
			<input placeholder="phone" type="text" name="phone">
			<p class="error"></p>
		</div>
		<div>
			<input required placeholder="email" type="email" name="email">
			<p class="error"></p>
		</div>
		<div>
			<?php $gender = isset($values['gender']) ? $values['gender'] : ''; ?>
			<select required name="gender">
				<option <?php if($gender == ''){ echo 'selected=""'; } ?> value="">Select gender</option>
				<option <?php if($gender == 'm'){ echo 'selected=""'; } ?> value="m">Male</option>
				<option <?php if($gender == 'f'){ echo 'selected=""'; } ?> value="f">Female</option>
				<option <?php if($gender == 'other'){ echo 'selected=""'; } ?> value="other">Other</option>
			</select>
			<p class="error"></p>
		</div>	
		<div>
			<input type="file" name="profile" accept="image/*">
			<p class="error"></p>
		</div><br/>
		<div>
			<button type="submit" name="register">Register</button>
		</div> 
	
	</form>

	<script
		src="https://code.jquery.com/jquery-3.2.1.min.js"
		integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		crossorigin="anonymous">
	</script>

	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" ></script>
	
	<script>
		$(function(){
		//ako ne koristime jquery validate
			// $('form').on('submit',function(e){
			// 	e.preventDefault();
			// 	var formData = new FormData($(this).get(0));
			// 	//se ostanato e isto
			// });

			$('form').validate({
 				submitHandler: function(form, event) {
    				event.preventDefault();
 					
 					var formData = new FormData(form);
 					formData.append("ajax",1);
    				$.ajax({
    					method: "POST",
    					url: "process_register.php",
    					contentType: false,
    					processData: false,
    					data: formData,
    					dataType: "json",
    					success: function(data){
    						if(data.success == true){
    							//location.href = data.location;
    							form.reset();
    							$('body').prepend("<h2>Successful registration!</h2>");
    						} else {
    							// console.log(data.errors);
    							var errors = Object.getOwnPropertyNames(data.errors);
    							errors.forEach(function(propertyName){
    								$("[name='"+propertyName+"']").next('.error').text(data.errors[propertyName]); //se selektira inputot koj ima atribut name so soodvetnoto property
    								//najdi go sledniot el. so class="error"  
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