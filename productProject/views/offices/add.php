<!-- za polinjata da imaat prazna vrednost -->

<?php
$officeCode = $city = $phone = $street = $number = $state = $country = $postalCode = $territory = '';
$errors = []; 

//validacija za input polinjata 
	//kako doagame do poleto(so create kopceto)
	if($_SERVER['REQUEST_METHOD'] == 'POST') {
		$officeCode = $_POST['officeCode'];
		$city = $_POST['city'];
		$phone = $_POST['phone'];
		$street = $_POST['addressLine1'];
		$number = $_POST['addressLine2'];
		$state = $_POST['state'];
		$country = $_POST['country'];
		$postalCode =$_POST['postalCode']; 
		$territory = $_POST['territory'];

	if (trim($officeCode) == '') {
		$errors['officeCode'] = 'Code is required';
	}

	if (trim($city) == '') {
		$errors['city'] = 'City is required';
	}

	if (trim($phone) == '') {
		$errors['phone'] = 'Phone is required';
	}

	if (trim($street) == '') {
		$errors['street'] = 'Street is required';
	}

	if (trim($country) == '') {
		$errors['country'] = 'Country is required';
	}

	if (trim($postalCode) == '') {
		$errors['postalCode'] = 'Postal code is required';
	}

	if (trim($territory) == '') {
		$errors['territory'] = 'Territory is required';
	}

	if (empty($errors)) {
		#validation is okay
		require '../../models/Office.php';
		$office = new \SEDC\DB\Office();
		$office->setAttributes($_POST);
		$office->save();
		header("Location: list.php"); exit;

		//var_dump($office->save());
	}


}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Create Office</title>
</head>
<body>

	<h1>Create Office</h1>
	<form method="POST" action="">
		<div>
			<label for="officeCode">Office Code</label>
			<input type="number" name="officeCode" id="officeCode" value="<?=$officeCode ?>" >
			<p class="error"><?php echo isset($errors['officeCode']) ? $errors['officeCode'] : '' ?></p>
		</div>
		
		<div>
			<label for="city">City</label>
			<input type="text" name="city" id="city"  value="<?=$city; ?>">
			<p class="error"><?php echo isset($errors['city']) ? $errors['city'] : '' ?></p>
		</div>

		<div>
			<label for="phone">Phone</label>
			<input type="text" name="phone" id="phone" value="<?=$phone; ?>">
			<p class="error"><?php echo isset($errors['phone']) ? $errors['phone'] : '' ?></p>
		</div>

		<div>
			<label for="addressLine1">Street</label>
			<input type="text" name="addressLine1" id="addressLine1"  value="<?=$street; ?>">
			<p class="error"><?php echo isset($errors['street']) ? $errors['street'] : '' ?></p>
		</div>

		<div>
			<label for="addressLine2">Number</label>
			<input type="text" name="addressLine2" id="addressLine2"  value="<?=$number; ?>">
			<p class="error"><?php echo isset($errors['number']) ? $errors['number'] : '' ?></p>
		</div>

		<div>
			<label for="state">State</label>
			<input type="text" name="state" id="state"  value="<?=$state; ?>">
			<p class="error"><?php echo isset($errors['state']) ? $errors['state'] : '' ?></p>
		</div>
		<div>
			<label for="country">Country</label>
			<input type="text" name="country" id="country"  value="<?=$country; ?>">
			<p class="error"><?php echo isset($errors['country']) ? $errors['country'] : '' ?></p>
		</div>
		
		<div>
			<label for="postalCode">Postal Code</label>
			<input type="text" name="postalCode" id="postalCode"  value="<?=$postalCode; ?>">
			<p class="error"><?php echo isset($errors['territory']) ? $errors['territory'] : '' ?></p>
		</div>


		<div>
			<label for="territory">Territory</label>
			<input type="text" name="territory" id="territory"  value="<?=$territory; ?>">
			<p class="error"></p>
		</div>
		<div>
			<button name="create">Create</button>
		</div>
	</form>
</body>
</html>