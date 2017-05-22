<?php include 'header.php'; ?>
<div class="container">
<?php include 'db.php'; ?>
    <?php
        if(!isset($_GET['id']) || !isset($portfolios[$_GET['id']]) ){
            header('location: index.php');
            exit;
        }
        $id = $_GET['id'];
        $portfolio = $portfolios[$id];
    ?>  
        <img src="<?php echo $portfolio['img']; ?>">
        <h1> <?php echo $portfolio['header'];  ?></h1>
        <p> <?php echo $portfolio['text']; ?></p>
<?php include 'footer.php'; ?>



