<?php
session_start();
unset($_SESSION['logged_in']);
setcookie('user',null);
header('Location: login.php');
exit;

?>