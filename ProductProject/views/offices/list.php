<?php
use SEDC\DB\Office;
require '../../models/office.php';
$office = new Office();
$offices = $office->readAll();

?>
<html>
    <head>
        <title>List Offices</title>
    </head>
    <body>
        <h1>List Offices</h1>
        <?php foreach ($offices as $office) { ?>
            <div>
                <address>
                    <?php echo $office->fullAddress(); ?>
                </address>
                <a href="edit.php?id=<?=$office->officeCode ?>">Edit</a> <hr />
            </div> 
        <?php } ?>
    </body>
</html>


