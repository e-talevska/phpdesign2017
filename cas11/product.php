<?php  
	if(!isset($_GET['product'])) {
		header('Location: index.php');
		exit;
	}
	require 'helper.php';
	$product = getProduct($_GET['product']);


?>

<?php include 'templates/header.php'; ?>

<?php if($product === FALSE) {
	echo "<h3> No product found </h3>"; 
	} else { ?>
	<h3> <?= $product[1]; ?> </h3>
	<p> <?= "Product name: " . $product[2]; ?> </p>
	<p> <?= "Product vendor: " . $product[4]; ?> </p>
	<p> <?= "Product description: " . $product[5]; ?> </p>

<?php } ?>

	

<?php include 'templates/footer.php'; ?>