<?php include 'templates/navMenu.php'; ?>
    <div class="container">
<?php include 'db.php'; ?>
<?php 
//if there is no id query parameter
//or there js 'id' query parameter, but no element on that location in $portfolios
if( !isset($_GET['id']) || !isset($portfolios[$_GET['id']] ) ){
    //redirect the user to index.php
    header('Location: index.php');
    exit;
    
}
$id = $_GET['id']; 
$portfolio = $portfolios[$id];
?>
        <img src="<?php echo $portfolio['img'];?>"/>
        <h1><?php echo $portfolio['header']; ?></h1>
        <p><?php echo $portfolio['text']; ?></p>
<?php include 'templates/footer.php'; ?>

