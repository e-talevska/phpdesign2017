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
			<input required value="<?php isset($values['username']) ? $values['username'] : ''; ?>" type="text" name="username" placeholder="Username">
			<p class="errors"><?php echo isset($errors['username']) ? $errors['username'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['password']) ? $values['password'] : ''; ?>" type="password" name="password" placeholder="Password">
			<p class="errors"><?php echo isset($errors['password']) ? $errors['password'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['firstname']) ? $values['firstname'] : ''; ?>" type="text" name="firstname" placeholder="First Name">
			<p class="errors"><?php echo isset($errors['firstname']) ? $errors['firstname'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['lastname']) ? $values['lastname'] : ''; ?>" type="text" name="lastname" placeholder="Last Name">
			<p class="errors"><?php echo isset($errors['lastname']) ? $errors['lastname'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['dob']) ? $values['dob'] : ''; ?>" type="date" name="dob" placeholder="Date of birth">
			<p class="errors"><?php echo isset($errors['dob']) ? $errors['dob'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['phone']) ? $values['phone'] : ''; ?>" type="text" name="phone" placeholder="Phone">
			<p class="errors"><?php echo isset($errors['phone'])  ? $errors['phone'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['email']) ? $values['email'] : ''; ?>" type="email" name="email" placeholder="Email">
			<p class="errors"><?php echo isset($errors['email']) ? $errors['email'] : ''; ?></p>
		</div>
		<div>
			<input required value="<?php isset($values['profile']) ? $values['profile'] : ''; ?>" type="file" name="profile" placeholder="Profile">
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
	<script src="https://code.jquery.com/jquery-3.2.1.min.js" integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.16.0/jquery.validate.min.js" ></script>
	<script>
		$(function(){

			$("form").validate({
				//ako ne go koristeme validate od plugin, submit eventot go fakame na ovoj nacin
				//$('form').on('submit', function(e){
						//e.preventDefault();
						//FormData vraka javascript objekt ako so get 0 go zememem inaku bez nego so this imame jquery objekt, a ni treba js objektot i ponatamu e istiot kod
						//var formData = new FormData($(this).get(0));
					//});
				submitHandler: function(form, event) {
					event.preventDefault();
					var formData = new FormData(form);
					//doadavame informacija(so pomos na append), za da znaeme dali requestot dosol preku ajax ili dosol normalno i ova na server ke znaci deka baranjeto doslo preku ajax i togas nejkeme da setirame sesija tuku da go ispratime kako json preku ajax.
					formData.append("ajax", 1); 
   				 	$.ajax({

   				 		method: 'POST',
   				 		url: "process_register.php",
   				 		contentType: false,
   				 		processData: false,
   				 		data: formData,
   				 		dataType: "json",
   				 		success: function(data){
   				 			//ako e uspesno, ako success ima vrednost true prenasocuvame na nova stranica
   				 			if(data.success == true){
   				 				//namesto prenasocuvanje moze i da mu ispecatime deka uspesno e submittirana formata
   				 				// form.reset();
   				 				// $("body").prepand("<h2>Success</h2>");
   				 				location.href = data.location;
   				 			}else{
   				 				//console.log(data.errors);
   				 				//ako na serverska strana kaze deka ima nekade greska pr. username, vo errors ke gi dobieme iminjata na greskite so s eisti kako name atributite vo formata
   				 				var errors = Object.getOwnPropertyNames(data.errors);
   				 				errors.forEach(function(propertyName){
   				 					//selektiraj go elemntot so name atribut i najdi go onoj posle nego so ja ima klsata error i vo ovoj element stavi tekst od objektot data.erros, kade ke ni jade vrednosta za property name
   				 					//iminjata na property gi tsvavivme isti kako name atributt na inputot
   				 					$("[name ='"+ propertyName +"']").next('.errors').text(data.errors[propertyName]);
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