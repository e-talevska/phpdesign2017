<?php session_start();

//check if the user is logged in
if (isset($_SESSION['logged_in']) || isset($_COOKIE['user'])){
	//the user is logged in
	header('Location: admin.php');
	exit;
}
	$error_email = isset($_SESSION['error_email']) ? $_SESSION['error_email'] : '';
	$error_pass = isset($_SESSION['error_password']) ? $_SESSION['error_password'] : '';
//ja cuva vrednosta na napisaniot mail	
	$email = isset($_SESSION['entered_email']) ? $_SESSION['entered_email'] : '';
	$remember = isset($_SESSION['rememberme']) ? $_SESSION['rememberme'] : FALSE;
	
//delete these messages from session
	//they should be active only one request after validation
	
	unset($_SESSION['error_email'],$_SESSION['error_password'],$_SESSION['entered_email'],$_SESSION['rememberme']);
	//unset($_SESSION['error_password']);
?>


<?php include 'includes/header.php'; ?>
	
<div class="container">
	<h1 class="page-header">Login</h1>
		<form method="POST" action="check_login.php">
			
			<div class="form-group">
			    <label for="exampleInputEmail1">Email address</label>
			    <input name="email" value="<?php echo $email; ?>" type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
			    <p class="help-block"><?php echo $error_email; ?></p>
			</div>

			<div class="form-group">
			    <label for="exampleInputPassword1">Password</label>
			    <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
			    <p class="help-block"><?php echo $error_pass; ?></p>
			</div>
			  
			<div class="checkbox">
			    <label>
			      <input <?php if ($remember){ echo 'checked="" '; } ?> name="rememberme" type="checkbox"> Remember me
			    </label>
			</div>
			  
			<button name="login" type="submit" class="btn btn-default">Submit</button>
		</form>

<?phph include 'includes/footer.php'; ?>