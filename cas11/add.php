<?php

$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $code = $_POST['code'];
    $name = $_POST['name'];
    $category = $_POST['category'];
    $scale = $_POST['scale'];
    $vendor = $_POST['vendor'];
    $description = $_POST['description'];
    $stock = $_POST['stock'];
    $buyPrice = $_POST['buy-price'];
    $recPrice = $_POST['rec-price'];
    
    // validate inputs
    if(trim($name) == ''){
        $errorName = 'Name is required';
    }
    
    if(empty($errors)){
        require 'helper.php';
        addProduct($_POST);
    }
}
?>
<?php include 'templates/header.php'; ?>
<h1>Add Product</h1>
<form method="POST">
  <div class="form-group">
    <label for="code">Code</label>
    <input name="code" type="text" class="form-control" id="code">
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <input name="name" type="text" class="form-control" id="name">
    <p class="help-block alert-danger"><?php echo isset($errors['name']) ? $errors['name'] : ''; ?></p>
  </div>
   <div class="form-group">
    <label for="category">Category</label>
    <input name="category" type="text" class="form-control" id="category">
  </div>
     <div class="form-group">
    <label for="scale">Scale</label>
    <input name="scale" type="text" class="form-control" id="scale">
  </div>
     <div class="form-group">
    <label for="vendor">Vendor</label>
    <input name="vendor" type="text" class="form-control" id="vendor">
  </div>
     <div class="form-group">
    <label for="description">Description</label>
    <textarea class="form-control" rows="3" name="description" id="description"></textarea>
  </div>
     <div class="form-group">
    <label for="stock">Stock</label>
    <input name="stock" type="text" class="form-control" id="stock">
  </div>
     <div class="form-group">
    <label for="buy-price">Buy Price</label>
    <input name="buy-price" type="text" class="form-control" id="buy-price">
  </div>
     <div class="form-group">
    <label for="rec-price">Recommended Price</label>
    <input name="rec-price" type="text" class="form-control" id="rec-price">
  </div>
    <button name="add" type="submit" class="btn btn-default">Add</button>
</form>

<?php include 'templates/footer.php'; ?>


