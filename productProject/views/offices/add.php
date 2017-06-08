<?php
$code = $city = $phone = $street = $number = $state = 
        $country = $postalCode = $territory = '';
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
        require '../../models/Office.php';
        $office = new \SEDC\DB\Office();
        $office->setAttributes($_POST);
        $office->save();
    }
}
?>
<html>
    <head>
        <title>Create Office</title>
    </head>
    <body>
        <h1>Create Office</h1>
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
                <input type="text" name="phone" id="phone" >
                <p class="error"></p>
            </div>
            <div>
                <label for="addressLine1">Street</label>
                <input type="text" name="addressLine1" id="addressLine1" >
                <p class="error"></p>
            </div>
            <div>
                <label for="addressLine2">Number</label>
                <input type="text" name="addressLine2" id="addressLine2" >
                <p class="error"></p>
            </div>
            <div>
                <label for="state">State</label>
                <input type="text" name="state" id="state" >
                <p class="error"></p>
            </div>
            <div>
                <label for="country">Country</label>
                <input type="text" name="country" id="country" >
                <p class="error"></p>
            </div>
            <div>
                <label for="postalCode">Postal Code</label>
                <input type="text" name="postalCode" id="postalCode" >
                <p class="error"></p>
            </div>
            <div>
                <label for="territory">Territory</label>
                <input type="text" name="territory" id="territory" >
                <p class="error"></p>
            </div>
            <div>
                <button name="create">Create</button>
            </div>
        </form>
    </body>
</html>
