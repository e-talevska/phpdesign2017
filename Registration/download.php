<?php 

	header("Content-Tupe: application/octet-stream");
	header("Content-Transfer-Encoding: Binary");
	header("Content-disposition: attacment;filename='{$_GET['file']}'");
	echo readfile('uploads/'.$_GET['file']);exit;

 ?>