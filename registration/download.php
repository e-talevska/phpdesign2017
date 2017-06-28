<?php
header("Content-type: application/octet-stream");
header("Content-transfer-Encoding: Binary");
header("Content-disposition: attachment;filename='{$_GET['file']}'");
echo readfile('uploads/'.$_GET['file']);exit;

