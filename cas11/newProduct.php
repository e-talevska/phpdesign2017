<?php 
	$errors = [];
	if($_SERVER['REQUEST_METHOD'] == "POST") {
		$code = $_POST['code'];//'code' e name atributot na inputot ;
		$name = $_POST['name']; 
		$category = $_POST['category'];
		$scale = $_POST['scale'];
		$vendor = $_POST['vendor'];
		$description = $_POST['description'];
		$stock = $_POST['stock'];
		$buyPrice = $_POST['buyPrice'];
		$recommendedPrice = $_POST['recommendedPrice'];
		
		//validate inputs
		if(trim($name) == '') {
			$errors['name'] = 'Name is required'; //Ovaa varijabla treba da ja ispechatam vo htmlot
		}

		if(empty($errors)){ //Validacijata e uspeshna, vo ovoj sluchaj da dodademe
			require 'helper.php';
			addProduct($_POST); //Go dodava celo POST, cela niza
		}
	}
?>

<?php include 'templates/header.php'; ?>


		<h2> New Form </h2>
		<form method="POST" >
		  <div class="form-group">
		    <label for="code"> Code </label>
    		<input name="code" type="text" class="form-control" id="code" >
		  </div>
		  <div class="form-group">
		    <label for="name"> Name </label>
    		<input name="name" type="text" class="form-control" id="name" >
    		<p class="help-block alert-danger"> <?php echo isset($errors['name']) ? $errors['name'] : ''; ?></p>
		  </div>
		  <div class="form-group">
		    <label for="category"> Category </label>
    		<input name="category" type="text" class="form-control" id="category" >
		  </div>
		  <div class="form-group">
		    <label for="scale"> Scale </label>
    		<input name="scale" type="text" class="form-control" id="scale" >
		  </div>
		  <div class="form-group">
		    <label for="vendor"> Vendor </label>
    		<input name="vendor" type="text" class="form-control" id="vendor" >
		  </div>
		  <div class="form-group">
		    <label for="description"> Description </label>
    		<textarea name="description" class="form-control" id="description" rows="3"> </textarea> 
		  </div>
		  <div class="form-group">
		    <label for="stock"> Quantity in Stock </label>
    		<input name="stock" type="text" class="form-control" id="stock" >
		  </div>
		  <div class="form-group">
		    <label for="buyPrice"> Buy Price </label>
    		<input name="buyPrice" type="text" class="form-control" id="buyPrice" >
		  </div>
		  <div class="form-group">
		    <label for="recommendedPrice"> Recommended Price </label>
    		<input name="recommendedPrice" type="text" class="form-control" id="recommendedPrice" >
		  </div>

		  
		  <button name="add" type="submit" class="btn btn-default"> Add </button>
		</form>


<?php include 'templates/footer.php'; ?>