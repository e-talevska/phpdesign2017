<?php

	require '../../models/office.php';
	use SEDC\DB\Office;
	$office = new Office();
	$offices = $office->readAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>List Offices</title>
</head>
<body>
	<h1>List Offices</h1>
	<?php 

		foreach ($offices as $office) { ?>
			<div>
				<address>
					<?php echo $office->city . ', ' . $office->country; ?>
					<?= "<b>" . $office->fullAddress() . "</b>" ; ?>
				</address>
				<a href="edit.php?id=<?= $office->officeCode ?>">edit</a>
				<a href="delete.php?id=<?= $office->officeCode ?>">delete</a>
			</div>
	<?php	} ?>

</body>
</html>