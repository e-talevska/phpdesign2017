<?php 

	if(!isset($_GET['product'])){
		header("Location: index.php");
		exit;
	}
	require 'helper.php';
	$product = getProduct($_GET['product']);

?>
<?php include 'templates/header.php' ?>
<?php
	//ako nekoj vo url dodal neso prenasoci go
	if($product == false){
		echo "<h3> No product found. </h3>";
	}else{  ?>
		<h3><?= $product[1]; ?></h3>
		<p><?= $product[5]; ?></p>
<?php	}	?>
<?php include 'templates/footer.php' ?>