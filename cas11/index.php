<?php require 'helper.php'; ?>
<!-- dodavanje na argument na f-jata od vrednosta na vo input poleto -->
<?php  //var_dump($_GET);
	$query = FALSE;
	if (isset($_GET['q'])) {
		$query = trim($_GET['q']);
	}
 ?>
<?php include 'templates/header.php' ?>
		
		<h1>Products</h1>
		<form class="form-inline">
 			<div class="form-group">
			    <input type="text" name="q" class="form-control" id="query" placeholder="Search...">
  			</div>

			<button type="submit" class="btn btn-default">Search</button>
  		</form>

		<div class="row">
			<?php getProducts($query); ?>
		</div>

<?php include 'templates/footer.php' ?>