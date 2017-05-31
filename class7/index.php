<?php
	require 'helper.php';

	// var_dump($_GET);
	$query = FALSE;
	if (isset($_GET['q'])) {
		$query = $_GET['q'];
	}
?>

<?php include 'templates/header.php' ?>

	<h1>Products</h1>
	<form class="form-inline" style="margin-bottom: 20px">
		<div class="form-group">
			<input type="text" name="q" class="form-control" id="query" placeholder="Search">
		</div>
			<button type="submit" class="btn btn-default">Search</button>
	</form>
	<div class="row">
		<?php getProducts($query); ?>
	</div>

<?php include 'templates/footer.php' ?>