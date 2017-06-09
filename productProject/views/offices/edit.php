<?php
require '../../models/Office.php';
if(!isset($_GET['id'])) {
    header('Location: list.php');exit;
}

$office = new SEDC\DB\Office();
if($office->fetchById($_GET['id']) === FALSE) { //if not entry was found
    header('Location: list.php');exit;
}

$code = $office->officeCode;
$city = $office->city;
$phone = $office->phone;
$street = $office->addressLine1;
$number = $office->addressLine2;
$state = $office->state;
$country = $office->country;
$postalCode = $office->postalCode;
$territory = $office->territory;

$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $code = $_POST['officeCode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $street = $_POST['addressLine1'];
    $number = $_POST['addressLine2'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postalCode = $_POST['postalCode'];
    $territory = $_POST['territory'];

    if(trim($code) == '') {
        $errors['code'] = 'Code is required';
    }
    
    if(trim($city) == '') {
        $errors['city'] = 'City is required';
    }
    
    if(trim($phone) == '') {
        $errors['phone'] = 'Phone is required';
    }
    
    if(trim($street) == '') {
        $errors['street'] = 'Street is required';
    }
    
    if(trim($country) == '') {
        $errors['country'] = 'Country is required';
    }
    
    if(trim($postalCode) == '') {
        $errors['postalCode'] = 'Postal Code is required';
    }
    
    if(trim($territory) == '') {
        $errors['territory'] = 'Terrirory is required';
    }
    
    //check if validation is successful
    if(empty($errors)) {
        //validation ok
        
        $office = new \SEDC\DB\Office();
        $office->setAttributes($_POST);
        $office->save();
        header("Location: list.php");exit;
    }
}
?>
<html>
    <head>
        <title>Edit Office</title>
    </head>
    <body>
        <h1>Edit Office</h1>
        <form method="POST" action="">
            <div>
                <label for="code">Code</label>
                <input value="<?=$code ?>" type="number" name="officeCode" id="code" >
                <p class="error">
                    <?php echo isset($errors['code']) ? $errors['code'] : '' ?></p>
            </div>
            <div>
                <label for="city">City</label>
                <input value="<?=$city ?>" type="text" name="city" id="city" >
                <p class="error"><?php echo isset($errors['city']) ? $errors['city'] : '' ?></p>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input value="<?=$phone ?>" type="text" name="phone" id="phone" >
                <p class="error"></p>
            </div>
            <div>
                <label for="addressLine1">Street</label>
                <input value="<?=$street ?>" type="text" name="addressLine1" id="addressLine1" >
                <p class="error"></p>
            </div>
            <div>
                <label for="addressLine2">Number</label>
                <input value="<?=$number ?>" type="text" name="addressLine2" id="addressLine2" >
                <p class="error"></p>
            </div>
            <div>
                <label for="state">State</label>
                <input value="<?=$state ?>" type="text" name="state" id="state" >
                <p class="error"></p>
            </div>
            <div>
                <label for="country">Country</label>
                <input value="<?=$country ?>" type="text" name="country" id="country" >
                <p class="error"></p>
            </div>
            <div>
                <label for="postalCode">Postal Code</label>
                <input value="<?=$postalCode ?>" type="text" name="postalCode" id="postalCode" >
                <p class="error"></p>
            </div>
            <div>
                <label for="territory">Territory</label>
                <input value="<?=$territory ?>" type="text" name="territory" id="territory" >
                <p class="error"></p>
            </div>
            <div>
                <button name="create">Create</button>
            </div>
        </form>
    </body>
</html>
