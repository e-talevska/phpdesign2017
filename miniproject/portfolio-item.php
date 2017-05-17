<?php include 'templates/header.php'; ?>
<div class="container"> 
   <?php include 'dbs.php'; ?>
    
        <?php
        // If there is no 'id' query parametar
        if( !isset ( $_GET['id']) || !isset($portfolios[$_GET['id']]) ) {
            // redirect the user to index.php
            header('Location: index.php');
            exit;
        }
        $id = $_GET['id']; 
        $portfolio = $portfolios[$id];
//        var_dump($portfolios);
        ?>
    <img src="<?php echo $portfolio['img']; ?>" >
    <h1><?php echo $portfolio['header']; ?></h1>
    <p><?php echo $portfolio['text']; ?></p>
   <?php include 'templates/footer.php'; ?>

