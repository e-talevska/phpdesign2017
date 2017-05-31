<?php include 'templates/header.php' ?>
<?php 
$errors = [];

if ($_SERVER['REQUEST_METHOD'] == "POST") {
	$code = $_POST['pr-code'];
	$name = $_POST['pr-name'];
	$category = $_POST['pr-line'];
	$scale = $_POST['pr-scale'];
	$vendor = $_POST['pr-vendor'];
	$description = $_POST['pr-description'];
	$stock = $_POST['pr-stock'];
	$price = $_POST['pr-price'];
	$msrp = $_POST['pr-msrp'];

	if (trim($name) == '') {
		$errors['name'] = 'Name is required';
	}

	if (empty($errors)) {
		require 'helper.php';
		addProduct($_POST);
	}
} ?>

<div class="col-lg-6 col-lg-offset-3">
<h1>Add product</h1>
	<form method="POST">
	  <div class="form-group">
	    <label for="pr-code">Product Code</label>
	    <input type="text" class="form-control" name="pr-code" placeholder="Product Code">

	    <label for="pr-name">Product Name</label>
	    <input type="text" class="form-control" name="pr-name" placeholder="Product Name">
	    <p class="danger"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></p>

	    <label for="pr-line">Product Line</label>
	    <input type="text" class="form-control" name="pr-line" placeholder="Product Line">

	    <label for="pr-scale">Product Scale</label>
	    <input type="text" class="form-control" name="pr-scale" placeholder="Product Scale">

	    <label for="pr-vendor">Product Vendor</label>
	    <input type="text" class="form-control" name="pr-vendor" placeholder="Product Vendor">

	    <label for="pr-description">Product Description</label>
	    <textarea class="form-control" name="pr-description" rows="3"></textarea>

	    <label for="pr-stock">Quantity in Stock</label>
	    <input type="text" class="form-control" name="pr-stock" placeholder="Quantity in Stock">

	    <label for="pr-price">Buy Price</label>
	    <input type="text" class="form-control" name="pr-price" placeholder="Buy Price">

	    <label for="pr-msrp">Recomended Price</label>
	    <input type="text" class="form-control" name="pr-msrp" placeholder="MSRP">

	    <button type="submit" class="btn btn-default">Add</button>
	  </div>
	</form>
</div>



<?php include 'templates/footer.php' ?>