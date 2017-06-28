<?php 
header("Content-Type: application/octet-stream");
header("Content-Tranfer-Encoding: Binary");
header("Content-Disposition:attachemnt;filename='{$_GET['file']}'");
echo readfile('uploads/' . $_GET['file']);exit;

?>