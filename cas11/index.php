<?php require 'helper.php'; ?>
<?php 
    $query = FALSE;
    if(isset($_GET['q'])){
        $query = trim($_GET['q']);
    }
?>
<?php include 'templates/header.php'; ?>
            <h1>Products</h1>
            <form class="form-inline">
                <div class="form-group">
                  <!--<label for="query">Search</label>-->
                  <input value="<?php echo $query; ?>" name="q" type="text" class="form-control" id="query" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form>
            <?php getProducts($query); ?>
            
                <div class="row"></div>
           
<?php include 'templates/footer.php'; ?>

