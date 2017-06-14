<?php
require '../../models/Office.php';
if(isset($_GET['id'])) {
    $office = new \SEDC\DB\Office();
    $office->delete($_GET['id']);
}

header("Location: list.php");exit;

