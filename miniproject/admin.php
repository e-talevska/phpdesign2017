<?php 
session_start();
require 'helper.php';
checkLoggedIn();
?>
<?php include 'templates/header.php'; ?>
    <div class="container">
        <h1 class="page-header">Admin Page</h1>
<?php include 'templates/footer.php'; ?>
