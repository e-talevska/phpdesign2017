<?php
	require '../../models/office.php';
	//[rpveruvam dali znam na koj link kliknal korisnikot]
	if(!isset($_GET['id'])){
		header('Location: list.php');
	}

	$office = new SEDC\DB\Office;
	//ako ne najdeme zapis
	if($office->fetchById($_GET['id']) === FALSE){
		header('Location: list.php');
	};

	//$code = $office->officeCode; ne ni treba bidejki vo forma go nemame
	$city = $office->city;
	$phone = $office->phone;
	$addressLine1 = $office->addressLine1;
	$addressLine2 = $office->addressLine2;
	$country = $office->country;
	$state = $office->state;
	$postalCode = $office->postalCode;
	$territory = $office->territory;
	
	$errors = [];
	//citanje podatoci od forma
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		//$code = $_POST['officeCode'];
		$city = $_POST['city'];
		$phone = $_POST['phone'];
		$addressLine1 = $_POST['addressLine1'];
		$addressLine2 = $_POST['addressLine2'];
		$country = $_POST['country'];
		$state = $_POST['state'];
		$postalCode = $_POST['postalCode'];
		$territory = $_POST['territory'];

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
			//var_dump($office);exit;//informacii kakko so se momentalno vo baza
			//kreiranje instanca od Office
			//$office = new \SEDC\DB\Office();
			$office->setAttributes($_POST);
			// gi prebrsiuame postoeckite informacii so setAttributes();
			//var_dump($office);exit;//promeneti rezultati, momentalni
			$office->update();
			header('Location: list.php ');
			exit;
		}
	}

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit Office</title>
</head>
<body>
	<h1>Edit Office</h1>
	<form method="POST">
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
			<button type="submit" name="update">Update</button>
		</div>
	</form>
</body>
</html>