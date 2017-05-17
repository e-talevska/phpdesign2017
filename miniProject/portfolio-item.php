<?php include 'includes/header.php'; ?>

<div class="container">
	<?php include 'includes/db.php' ?>
	<?php 
		if( !isset( $_GET['id'] ) || !isset( $portfolios[$_GET['id']] ) ){
			header('Location: index.php');
			exit;
		}
		$id = $_GET['id'];
		$portfolio = $portfolios[$id] ?>
	<img src="<?php echo $portfolio['img']; ?>"/>
	<h1><?php echo $portfolio['header']; ?></h1>
	<P><?php echo $portfolio['text']; ?></P>

</div>

<?php include 'includes/footer.php'; ?>