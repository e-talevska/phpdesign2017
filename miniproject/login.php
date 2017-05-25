<?php   

	session_start();
	//check if the user is already logged in or if the cookie is set
	if(isset($_SESSION['logged_in']) || isset($_COOKIE['user'])){
		//the user is logged in and he/she doesn't have to see the login page
		header('Location: admin.php');exit;
	}
	//ako e setirano $_SESSION['error_email'] stavi ja vrednosta email is required, ako ne prazen string.
	$error_email = isset($_SESSION['error_email']) ? $_SESSION['error_email'] : '';
	$error_pass = isset($_SESSION['error_password']) ? $_SESSION['error_password'] : '';
	$email = isset($_SESSION['entered_email']) ? $_SESSION['entered_email'] : '';
	$remember = isset($_SESSION['rememberme']) ? $_SESSION['rememberme'] : false;
	//delete messages from sessions, they should be active only one request after the validation
	unset($_SESSION['error_email']);
	unset($_SESSION['error_password']);
	unset($_SESSION['entered_email']);
	unset($_SESSION['rememberme']);

?>
<?php  

	include 'header.php';

?>
	<div class="container">
		<h1 class="page-header">Login</h1>
		<form method="POST" action="check_login.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email address</label>
		    <input value="<?php echo $email; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email" name="email">
		    <p class="help-block" value= "<?php echo $email; ?>"><?php echo $error_email; ?></p>
		  </div>
		  <div class="form-group">
		    <label for="exampleInputPassword1">Password</label>
		    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password" name="password">
		    <p class="help-block"><?php echo $error_pass; ?></p>
		  </div>
		  <div class="checkbox">
		    <label>
		      <input type="checkbox" name="rememberme"  <?php if($remember){echo 'checked=""';} ?>> Remember me

		    </label>
		  </div>
		  <button type="submit" class="btn btn-default" name="login">Submit</button>
		</form>

<?php

	include 'footer.php';

?>

</body>
</html>