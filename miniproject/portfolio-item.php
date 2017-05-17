<?php  include 'header.php'; ?>
<div class="container">
<?php include 'db.php'; ?>
<?php
//if there is no id query parameter, prenasoci so funkcija header, location e header kade so treba da se sluci neso.
	if(!isset($_GET['id']) || !isset($portfolios[$_GET['id']])){
		header('Location: index.php');
		exit;
	}  
	$id = $_GET['id'];
	//var_dump($id);
	$portfolio = $portfolios[$id];
	//var_dump($portfolio);
?>
<h1> <?php echo $portfolio['header']; ?></h1>
<p> <?php echo $portfolio['text']; ?> </p>
<img src="<?php echo $portfolio['img']; ?>"  > 
<?php // var_dump($_GET); ?>
</div>
<?php  include 'footer.php' ; ?>
