<?php

	header('Content-Type: application/octet-stream');
	header('Content-Transfer-Encoding: binary');
	header("Content-Disposition: attachment; filename={$_GET['file']}"); 
	echo readfile($_GET['file']);
	exit;

?>