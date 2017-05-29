<?php require 'helper.php'; ?>
<?php
// var_dump($_GET);        //$_GET super globalen array 
$query = FALSE; // smetam deka nema query parametri odnosno samo korisnikot dosol do search.php
if(isset($_GET['q'])){
    $query = trim($_GET['q']);
}
?>
<?php include 'templates/header.php';?>
            <h1>Products</h1>
            <form class="form-inline">
                <div class="form-group">
                     <!--<label for="Query">Search</label>-->
                        <input name="q" type="text" class="form-control" id="query" placeholder="Search...">
                </div>
                
                 <button type="submit" class="btn btn-default">Search</button>
                
                </form>
                <div class="row">
                 <?php getproducts($query); ?>
                </div>
<?php include 'templates/footer.php';?>
                