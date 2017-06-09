<?php
	$code = $city = $phone = $addressLine1 = $addressLine2 = $country = $state = $postalCode = $territory = '';
		$errors = [];
	//citanje podatoci od forma
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$code = $_POST['officeCode'];
		$city = $_POST['city'];
		$phone = $_POST['phone'];
		$addressLine1 = $_POST['addressLine1'];
		$addressLine2 = $_POST['addressLine2'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$postalCode = $_POST['postalCode'];
		$territory = $_POST['territory'];

		if(trim($code) == ''){
			$errors['officeCode'] = "Code is required";
		}
		if(trim($city) == ''){
			$errors['city'] = "City is required";
		}
		if(trim($phone) == ''){
			$errors['phone'] = "Phone is required";
		}
		if(trim($addressLine1) == ''){
			$errors['addressLine1'] = "Address Line 1 is required";
		}
		if(trim($postalCode) == ''){
			$errors['postalCode'] = "Postal Code is required";
		}
		if(trim($territory) == ''){
			$errors['territory'] = "Territory is required";
		}

		//check if validation is successful
		if(empty($errors)){
			//validation okay
			//avtomatski ja nasleduva funkcija setAttributes od DB
			require '../../models/office.php';
			//kreiranje instanca od Office
			$office = new \SEDC\DB\Office();
			$office->setAttributes($_POST);
			//zemanite property t.e. vrednosti od tabela zacuvaj gi vo baza
			//var_dump($office);exit;
			$office->save();
			header('Location: list.php ');
			exit;
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
	<form method="POST">
		<div>
			<label for="code">Office Code</label>
			<input value="<?= $code; ?>" type="number" name="officeCode" id="code">
			<p class="error">
				<?php echo isset($errors['officeCode']) ? $errors['officeCode'] : ''; ?>
			</p>
		</div>
		<div>
			<label for="city">City</label>
			<input value="<?= $city; ?>" type="text" name="city" id="city">
			<p class="error">
				<?php echo isset($errors['city']) ? $errors['city'] : ''; ?>
			</p>
		</div>
		<div>
			<label for="phone">Phone</label>
			<input value="<?= $phone; ?>" type="number" name="phone" id="phone">
			<p class="error">
				<?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?>
			</p>
		</div>
		<div>
			<label for="addressLine1">Address Line 1</label>
			<input value="<?= $addressLine1; ?>" type="text" name="addressLine1" id="addressLine1">
			<p class="error">
				<?php echo isset($errors['addressLine1']) ? $errors['addressLine1'] : ''; ?>
			</p>
		</div>
		<div>
			<label for="addressLine2">Address Line 2</label>
			<input value="<?= $addressLine2; ?>"type="text" name="addressLine2" id="addressLine2">
			<p class="error">
				<?php echo isset($errors['addressLine2']) ? $errors['addressLine2'] : ''; ?>
			</p>
		</div>
		<div>
			<label for="state">State</label>
			<input value="<?= $state; ?>" type="text" name="state" id="state">
			<p class="error"></p>
		</div>
		<div>
			<label for="country">Country</label>
			<input value="<?= $country; ?>" type="text" name="country" id="country">
			<p class="error"></p>
		</div>
		<div>
			<label for="postalCode">Postal Code</label>
			<input value="<?= $postalCode; ?>" type="text" name="postalCode" id="postalCode">
			<p class="error">
				<?php echo isset($errors['postalCode']) ? $errors['postalCode'] : ''; ?>
			</p>
		</div>
		<div>
			<label for="territory">Territory</label>
			<input value="<?= $territory; ?>" type="text" name="territory" id="territory">
			<p class="error">
				<?php echo isset($errors['territory']) ? $errors['territory'] : ''; ?>
			</p>
		</div>
		<div>
			<button type="submit" name="create">Create</button>
		</div>
	</form>
</body>
</html>