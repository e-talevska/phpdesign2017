<?php

	
	session_start();
	require 'helper.php';
	checkLoggedIn();

?>
<?php  

	include 'header.php';

 ?>
<?php

	//ako e setirana stavi ja vrednosta od error_title ili title ili text ako ne ostavi prazno
	$errorTitle = isset($_SESSION['error_title']) ? $_SESSION['error_title'] : '';
	$errorText = isset($_SESSION['error_text']) ? $_SESSION['error_text'] : '';
	$errorImage = isset($_SESSION['error_image']) ? $_SESSION['error_image'] : '';
	$title = isset($_SESSION['title']) ? $_SESSION['title'] : '';
	$text = isset($_SESSION['text']) ? $_SESSION['text'] : '';

	unset($_SESSION['error_title'],
			$_SESSION['error_text'],
			$_SESSION['title'],
			$_SESSION['text'],
			$_SESSION['error_image']);//unset na site promenlivi bidejki sakame samo eden request da trae izvrsenoto vo sesija

?>
 <div class="container">
 <h1 class="page-header">Admin Page</h1>
 <!-- koga rabotime so fajlovi metodot mora d abide post i da go imame atributot enctype so vrednost multipart/form-data -->
 	<form method="POST" action="add_portfolio.php" enctype="multipart/form-data">
		  <div class="form-group">
		    <label for="title">Title</label>
		    <input type="text" class="form-control" id="title" name="title" value="<?php echo $title; ?>">
		    <p class="help-block"><?php echo $errorTitle; ?></p>
		  </div>
		  <div class="form-group">
		    <label for="text1">Content</label>
		    <textarea rows="3" name="text" class="form-control" id="text"><?php echo $text; ?></textarea>
		    <p class="help-block"><?php echo $errorText; ?></p>
		  </div>
		  <div class="form-group">
		    <label for="image">Image</label>
		    <input type="file" class="form-control" id="image" name="image">
		    <p class="help-block"><? echo $errorImage ?></p>
		  </div>
		  <button type="submit" class="btn btn-default" name="submit">Submit</button>
	</form>


 <?php 

 	include 'footer.php';

  ?>