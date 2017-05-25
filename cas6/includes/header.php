<?php 
// If season is already started
if(session_id()== ''){
    sesion_start();
}
?>
<html>
    <head>
        <?php
 //       if(isset($title)){
 //           echo $title;
 //       } else {
 //          echo '';
 //       }
        ?>
        <title><?php echo isset($title) ? $title : '';?></title>
    </head>
    <body>
        <ul>
            <li>first</li>
            <li>second</li>
            <li>third</li>

        </ul>

