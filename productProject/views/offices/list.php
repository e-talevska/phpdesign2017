<?php
session_start();
if(!isset($_SESSION['logged_in'])) {
    header("Location: ../users/login.php");
}
use SEDC\DB\Office;
//use SEDC\DB\User;
require '../../models/Office.php';
require '../../models/User.php';
$office = new Office();
$offices = $office->readAll();
//$user = new \SEDC\DB\User();
//$user->fetchByEmail($_SESSION['logged_in']);
?>
<html>
    <head>
        <title>List Offices</title>
    </head>
    <body>
        <h1>List Offices</h1>
        <ul>
            <!--<li><?=$user->fullName; ?></li>-->
            <li><?=$_SESSION['fullName'] ?></li>
            <li><a href="../users/logout.php">log out</a></li>
        </ul>
        
        <?php foreach ($offices as $office) { ?>
            <div>
                <address>
                    <?php echo $office->fullAddress(); ?>
                </address>
                <a href="edit.php?id=<?=$office->officeCode ?>">edit</a>
                <a href="delete.php?id=<?=$office->officeCode ?>">delete</a>
            </div>
        <?php } ?>
    </body>
</html>
