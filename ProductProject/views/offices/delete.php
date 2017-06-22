<?php
require '../../models/office.php';
if(isset($_GET['id'])){
    $office = new \SEDC\DB\Office();
    $office->delete($_GET['id']);
}

header('location: list.php');exit;