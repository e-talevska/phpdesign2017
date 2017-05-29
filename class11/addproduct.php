<?php include 'templates/header.php' ?>
<?php

	//generiraj error niz i dodavaj greski kako elementi od niza
	$errors = [];	

	if(($_SERVER['REQUEST_METHOD']) == 'POST'){
		$pcode = $_POST['pcode'];
		$pname = $_POST['pname'];
		$pline = $_POST['pline'];
		$pscale = $_POST['pscale'];
		$pvendor = $_POST['pvendor'];
		$pdescription = $_POST['pdescription'];
		$pstock = $_POST['pstock'];
		$pstock = $_POST['pstock'];
		$pprice = $_POST['pprice'];
		$pbuy = $_POST['pbuy'];

	//validate input
	if(trim($pcode)  == ''){
		$errors['pcode'] = "Code is required";
	}

	if(empty($errors)){ //validation ok
		require 'helper.php';
		//moze da gi ispratime edna vrednost po edna a moze i celoto $_POST bidejki e niza.
		addProduct($_POST);
	}

}

?>

	<h1>Add Product</h1>
	<form method="POST">
	  <div class="form-group">
		<label for="pcode">Product Code</label>
	    <input name="pcode" type="text" class="form-control" id="pcode" placeholder="Product Code">
	    <p class="help-block alert-danger"><?php if(isset($errors['pcode'])){echo $errors['pcode'];} ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pname">Product Name</label>
	    <input name="pname" type="text" class="form-control" id="pname" placeholder="Product Name">
	  </div>
	  <div class="form-group">
	  	<label for="pline">Product Line</label>
	    <input name="pline" type="text" class="form-control" id="pline" placeholder="Product Line">
	  </div>
	  <div class="form-group">
	  	<label for="pscale">Product Scale</label>
	    <input name="pscale" type="text" class="form-control" id="pscale" placeholder="Product Scale">
	  </div>
	  <div class="form-group">
	  	<label for="pvendor">Product Vendor</label>
	    <input name="pvendor" type="text" class="form-control" id="pvendor" placeholder="Product Vendor">
	  </div>
	  <div class="form-group">
	  	<label for="pdescription">Product Description</label>
	    <textarea name="pdescription" type="text" class="form-control" id="pdescription" placeholder="Product Description" rows="3"></textarea>
	  </div>
	  <div class="form-group">
	  	<label for="pstock">Product Stock</label>
	    <input name="pstock" type="text" class="form-control" id="pstock" placeholder="Product Stock">
	  </div>
	  <div class="form-group">
	  	<label for="pprice">Product Price</label>
	    <input name="pprice" type="text" class="form-control" id="pprice" placeholder="Product Price">
	  </div>
	  <div class="form-group">
	  	<label for="pbuy">Product MSRP</label>
	    <input name="pbuy" type="text" class="form-control" id="pbuy" placeholder="Product MSRP">
	  </div>
	  <button type="submit" class="btn btn-default">Add Product</button>
	</form>

<?php include 'templates/footer.php'; ?>