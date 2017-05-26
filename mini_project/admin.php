<?php session_start();
require 'helper.php';
checkLoggedIn();
?>

<?php
	$errorTitle = isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '';
	$errorText = isset($_SESSION['error_text']) ? $_SESSION['error_text'] : '';
	$errorImage = isset($_SESSION['error_image']) ? $_SESSION['error_image'] : '';
	$title = isset($_SESSION['title']) ? $_SESSION['title'] : '';
	$text = isset($_SESSION['text']) ? $_SESSION['text'] : '';

	unset($_SESSION['error_title'], $_SESSION['error_text'], $_SESSION['error_image'], $_SESSION['title'], $_SESSION['text']);
?>

<?php include 'includes/header.php';?>
	<div class="container">
		<h1 class="page-header">Admin Page</h1>

			<form method="POST" enctype="multipart/form-data" action="add_portfolio.php" >
			
			<div class="form-group">
			    <label for="title">Title</label>
			    <input value="<?php echo $title; ?>" name="title" type="text" class="form-control" id="title">
			    <p class="help-block"><?php echo $errorTitle; ?></p>
			</div>

			<div class="form-group">
			    <label for="text">Content</label>
			   <textarea rows="3" name="text" class="form-control" id="text"><?php echo $text; ?></textarea>
			    <p class="help-block"><?php echo $errorText; ?></p>
			</div>
			
			<div class="form-group">
			    <label for="image">Image</label>
			    <input name="image" type="file" class="form-control" id="image">
			    <p class="help-block"><?php echo $errorImage; ?></p>
			</div>

			<button name="submit" type="submit" class="btn btn-default">Submit</button>
		</form>

<?php include 'includes/footer.php'; ?>