<?php
$errors = [];
	if ($_SERVER['REQUEST_METHOD'] == "POST") {
		$code = $_POST['code'];
		$name = $_POST['name'];
		$category = $_POST['category'];
		$scale = $_POST['scale'];
		$description = $_POST['description'];
		$stock = $_POST['stock'];
		$buyPrice = $_POST['buyPrice'];
		$vendor = $_POST['vendor'];
		$recommendedPrice = $_POST['recommendedPrice'];

		//validate inputs
		if(trim($name) == ''){
			$errors['name']  = 'Name is required';
			$errors['code']  = 'Code is required';
			$errors['category']  = 'Category is required';
			$errors['scale']  = 'Scale is required';
			$errors['description']  = 'Decsription is required';
			$errors['stock']  = 'Stock is required';
			$errors['buyPrice']  = 'Price is required';
			$errors['vendor']  = 'Vendor is required';
			$errors['recommendedPrice']  = 'Recommended price is required';
		}

		if(empty($errors)){ //everything is validated
			require 'helper.php';
			addProduct($_POST); //so POST isprakjame cela niza
		}
	}
?>
<?php include 'templates/header.php' ?>
<form method="POST">
	
	<h1>Add product</h1>
	<div class="form-group">
	    <label for="code">Code</label>
	    <input type="text" class="form-control" id="productCode" name="code">
	    <p class="help-block alert"><?php echo isset($errors['code']) ? $errors['code'] : ''; ?></p>
	</div>
	<div class="form-group">
	    <label for="name">Name</label>
	    <input name="name" type="text" class="form-control" id="name" >
	    <p class="help-block alert"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></p>
	</div>
	<div class="form-group">
	    <label for="category">Category</label>
	    <input name="category" type="text" class="form-control" id="category" >
	    <p class="help-block alert"><?php echo isset($errors['category']) ? $errors['category'] : ''; ?></p>
	</div>
	<div class="form-group">
	    <label for="scale">Scale</label>
	    <input name="scale" type="text" class="form-control" id="scale" >
	</div>
	<div class="form-group">
	    <label for="vendor">Vendor</label>
	    <input name="vendor" type="text" class="form-control" id="vendor" >
	</div>
	<div class="form-group">
	    <label for="description">Decsription</label>
	    <textarea name="description" rows="3"  class="form-control" id="description"></textarea>
	</div>
	<div class="form-group">
	    <label for="stock">Quantity in stock</label>
	    <input name="stock" type="text" class="form-control" id="stock" >
	</div>
	<div class="form-group">
		<label for="buyPrice">Buy Price</label>
		<input name="buyPrice" type="text" class="form-control" id="buyPrice" >
	</div>
	<div class="form-group">
		<label for="recommendedPrice">Recommended Price</label>
		<input name="recommendedPrice" type="text" class="form-control" id="recommendedPrice" >
	</div>
<button type="submit" name="add" class="btn btn-default">Add</button>

</form>
<?php include 'templates/footer.php' ?>