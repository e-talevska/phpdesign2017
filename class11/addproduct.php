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

	if(trim($pcode)  == ''){
		$errors['pcode'] = "Code is required";
	}
	if(trim($pname)  == ''){
		$errors['pname'] = "Name is required";
	}
	if(trim($pline)  == ''){
		$errors['pline'] = "Line is required";
	}
	if(trim($pscale)  == ''){
		$errors['pscale'] = "Scale is required";
	}
	if(trim($pvendor)  == ''){
		$errors['pvendor'] = "Vendor is required";
	}
	if(trim($pdescription)  == ''){
		$errors['pdescription'] = "Description is required";
	}
	if(trim($pstock)  == ''){
		$errors['pstock'] = "Stock is required";
	}
	if(trim($pprice)  == ''){
		$errors['pprice'] = "Price is required";
	}
	if(trim($pbuy)  == ''){
		$errors['pbuy'] = "MSRP is required";
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
	    <p class="help-block alert-danger"><?php if(isset($errors['pname'])){ echo $errors['pname']; } ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pline">Product Line</label>
	    <input name="pline" type="text" class="form-control" id="pline" placeholder="Product Line">
	    <p class="help-block alert-danger"><?php if(isset($errors['pline'])){ echo $errors['pline'];} ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pscale">Product Scale</label>
	    <input name="pscale" type="text" class="form-control" id="pscale" placeholder="Product Scale">
	    <p class="help-block alert-danger"><?php if(isset($error['pscale'])){echo $errors['pscale'];} ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pvendor">Product Vendor</label>
	    <input name="pvendor" type="text" class="form-control" id="pvendor" placeholder="Product Vendor">
	    <p class="help-block alert-danger"><?php if(isset($errors['pvendor'])){ echo $errors['pvendor']; } ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pdescription">Product Description</label>
	    <textarea name="pdescription" type="text" class="form-control" id="pdescription" placeholder="Product Description" rows="3"></textarea>
	    <p class="help-block alert-danger"><?php if(isset($errors['pdescription'])){ echo $errors['pdescription']; } ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pstock">Product Stock</label>
	    <input name="pstock" type="text" class="form-control" id="pstock" placeholder="Product Stock">
	    <p class="help-block alert-danger"><?php if(isset($errors['pstock'])){ echo $errors['pstock']; } ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pprice">Product Price</label>
	    <input name="pprice" type="text" class="form-control" id="pprice" placeholder="Product Price">
	    <p class="help-block alert-danger"><?php if(isset($errors['pprice'])){ echo $errors['pprice']; } ?></p>
	  </div>
	  <div class="form-group">
	  	<label for="pbuy">Product MSRP</label>
	    <input name="pbuy" type="text" class="form-control" id="pbuy" placeholder="Product MSRP">
	    <p class="help-block alert-danger"><?php if(isset($errors['pbuy'])){ echo $errors['pbuy']; } ?></p>
	  </div>
	  <button type="submit" class="btn btn-default">Add Product</button>
	</form>

<?php include 'templates/footer.php'; ?>