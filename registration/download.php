<?php
header("Content-Type: application/octet-stream");
header("Content-Transfer-Encoding: Binary");
header("Content-Disposition: attachment;filename='{$_GET['file']}'");
echo readfile('uploads/'.$_GET['file']); exit;


?>