<?php
session_start();
unset($_SESSION['logged_in']);
setcookie("user",NULL);
header('Location: login.php');
exit;

