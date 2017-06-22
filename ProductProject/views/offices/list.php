<?php
session_start();
if(!isset($_SESSION['logged_in'])){
//    header('location: ../../users.php');
}
use SEDC\DB\Office;
require '../../models/office.php';
require '../../models/user.php';
$office = new Office();
$offices = $office->readAll();
$user = new \SEDC\DB\User();
$user->fetchByEmail($_SESSION['logged_in']);

?>
<html>
    <head>
        <title>List Offices</title>
    </head>
    <body>
        <h1>List Offices</h1>
        <ul>
            <li><?=$user->fullName; ?></li>
            <li><?=$_SESSION['fullName']; ?></li>
            <li><a href="../../users.php"></a></li>
        </ul>
        <a href="../../logout.php">Log out</a>
        <?php foreach ($offices as $office) { ?>
            <div>
                <address>
                    <?php echo $office->fullAddress(); ?>
                </address>
                <a href="edit.php?id=<?=$office->officeCode ?>">Edit</a> <hr />
                <a href="delete.php?id=<?=$office->officeCode ?>">Delete</a> <hr />
            </div> 
        <?php } ?>
    </body>
</html>


