<?php

function checkLoggedIn() {
      if(!isset($_SESSION['logged_in'])){
    if(isset($_COOKIE['user'])){
        $_SESSION['logged_in'] = $_COOKIE['user'];
         } else {
    // if not loged in redirect to login page
    header('Location: login.php');exit;
         }
}

}
?>
