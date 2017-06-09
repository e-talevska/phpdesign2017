<?php
$officeCode = $city = $phone = $addressLine1 = $addressLine2 = $state = $country = $postalCode = $territory = '';
$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $officeCode = $_POST['code'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $addressLine1 = $_POST['addressLine1'];
    $addressLine2 = $_POST['addressLine2'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postalCode = $_POST['postalCode'];
    $territory = $_POST['territory'];
    
    if(trim($officeCode) == ''){
        $errors['code'] = 'Office code is required';
    }
    if(trim($city) == ''){
        $errors['city'] = 'City is required';
    }
    if(trim($phone) == ''){
        $errors['phone'] = 'Phone is required';
    }
    if(trim($addressLine1) == ''){
        $errors['addressLine1'] = 'Address 1 is required';
    }
    if(trim($addressLine2) == ''){
        $errors['addressLine2'] = 'Address 2 is required';
    }
    if(trim($state) == ''){
        $errors['state'] = 'State is required';
    }
    if(trim($country) == ''){
        $errors['country'] = 'Country is required';
    }
    if(trim($postalCode) == ''){
        $errors['postalCode'] = 'Postal code is required';
    }
    if(trim($territory) == ''){
        $errors['territory'] = 'Territory is required';
    }
    
    if(empty($errors)){
        require '../../models/office.php'; 
        $office = new \SEDC\DB\Office();
        $office->setAttributes($_POST);
        $office->save();
        header('location: list.php');exit;
    }
}
?>
<html>
    <head>
        <title>Create Office</title>
        <style>
            .error{
                background-color: red;
                padding: 0;
                margin: 0;
                width: 200px;
            }
            label{
                display: block;
            }
        </style>
    </head>
    <body>
        <h1>Create Office</h1>
        <form method="POST" action="">
            <div>
                <label for="code">Code</label>
                <input value="<?= $officeCode ?>" type="number" name="code" id="code">
                <p class="error"><?php echo isset($errors['code']) ? $errors['code'] : ''; ?></p>
            </div>
            <div>
                <label for="city">City</label>
                <input value="<?= $city ?>" type="text" name="city" id="city">
                <p class="error"><?php echo isset($errors['city']) ? $errors['city'] : ''; ?></p>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input value="<?= $phone ?>" type="text" name="phone" id="phone">
                <p class="error"><?php echo isset($errors['phone']) ? $errors['phone'] : ''; ?></p>
            </div>
            <div>
                <label for="addressLine1">Address 1</label>
                <input value="<?= $addressLine1 ?>" type="text" name="addressLine1" id="addressLine1">
                <p class="error"><?php echo isset($errors['addressLine1']) ? $errors['addressLine1'] : ''; ?></p>
            </div>
            <div>
                <label for="addressLine2">Address 2</label>
                <input value="<?= $addressLine2 ?>" type="text" name="addressLine2" id="addressLine2">
                <p class="error"><?php echo isset($errors['addressLine2']) ? $errors['addressLine2'] : ''; ?></p>
            </div>
            <div>
                <label for="state">State</label>
                <input value="<?= $state ?>" type="text" name="state" id="state">
                <p class="error"><?php echo isset($errors['state']) ? $errors['state'] : ''; ?></p>
            </div>
            <div>
                <label for="country">Country</label>
                <input value="<?= $country ?>" type="text" name="country" id="country">
                <p class="error"><?php echo isset($errors['country']) ? $errors['country'] : ''; ?></p>
            </div>
            <div>
                <label for="postalCode">Postal Code</label>
                <input value="<?= $postalCode ?>" type="text" name="postalCode" id="postalCode">
                <p class="error"><?php echo isset($errors['postalCode']) ? $errors['postalCode'] : ''; ?></p>
            </div>
            <div>
                <label for="territoy">Territory</label>
                <input value="<?= $territory ?>" type="text" name="territory" id="territory">
                <p class="error"><?php echo isset($errors['territory']) ? $errors['territory'] : ''; ?></p>
            </div>
            <div>
                <button name="create">Create</button>
            </div>
        </form>
    </body>
</html>

