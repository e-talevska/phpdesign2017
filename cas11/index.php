<?php require 'helper.php'; ?>
<?php
//var_dump($_GET);
$query = FALSE;
if(isset($_GET['q'])) {
    $query = trim($_GET['q']);
}
?>
<?php include 'templates/header.php'; ?>
    <h1>Products</h1>
    <form class="form-inline">
        <div class="form-group">
          <!--<label for="query">Search</label>-->
          <input name="q" type="text" class="form-control" id="query" placeholder="Search...">
        </div>
        <button type="submit" class="btn btn-default">Search</button>
    </form>
    <div class="row">
        <?php getProducts($query); ?>
    </div>
<?php include 'templates/footer.php'; ?>

