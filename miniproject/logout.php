<?php
session_start();
unset($_SESSION['logged']);
setcookie("user", NULL);
header('Location: login.php');
exit;

