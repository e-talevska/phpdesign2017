<?php include 'includes/header.php'; ?>
	<div class="container">

<?php include 'db.php'; ?>
<?php 
//so _GET go menuvame URL-to i taka gi prenesuvame informaciite

// if there is no id parameter or index that doesn't exist
	if( !isset ( $_GET['id'] ) || !isset($portfolios[$_GET['id']]) ){
		header('Location: index.php');
		exit;
	}

	$id = $_GET['id']; 
	$portfolio = $portfolios[$id];
?>
	<img src="<?php echo $portfolio['img']; ?>">
	<h1><?php echo $portfolio['header']; ?></h1>
	<p><?php echo $portfolio['text']; ?></p>

<?php include 'includes/footer.php'; ?>
