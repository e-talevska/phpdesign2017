<?php
ini_set('display_errors', true);
require 'functions.php';
$title = "SEDC";
$name = NULL;
var_dump(isset($name));
?>
<?php include 'includes/header.php'; ?>
<?php //var_dump($_SERVER); ?>
        <h1><?php echo hello(); ?></h1>
<?php include 'includes/footer.php'; ?>
