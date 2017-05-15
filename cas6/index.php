<?php
    ini_set('display_errors', false);
    require 'functions.php';
    $title = "SEDC";
    $name = null;
    var_dump(isset($name));
    var_dump(is_null($name));
    var_dump(empty($name));
 ?>
<?php include 'includes/header.php'; ?>
<?php //var_dump($_SERVER); ?>
        <h1><?php echo hello() ?></h1>
<?php include 'includes/footer.php'; ?>        


