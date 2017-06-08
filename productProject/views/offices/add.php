<?php
$code = $city = $phone = $street = $number = $state = $country = $postalode = $teritorry = '';
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
    $teritorry = $_POST['teritorry'];
    if(trim($code) == ''){
        $errors['code'] = 'Code is required';
    }
    if(trim($city) == ''){
        $errors['city'] = 'City is required';
    }
     if(trim($phone) == ''){
        $errors['phone'] = 'Phone is required';
    }
     if(trim($street) == ''){
        $errors['street'] = 'Street is required';
    }
     if(trim($number) == ''){
        $errors['number'] = 'Numbert is required';
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
     if(trim($teritorry) == ''){
        $errors['teritorry'] = 'Teritorry code is required';
    }
}

    // Check if validations is succsessfull
    if(empty($errors)) {
        //Validation ok
        require '../../models/office.php';
        $office = new SEDC\DB\Office();
        $office->setAttributes($_POST);
        $office->save();
    }
?>

<html>
    <head>
        <title>Crate Office</title>
    </head>
    <body>
        <h1>Create Office</h1>
        <form method="POST" action="">
            <div>
                <label for="code">Code</label>
                <input value='<?=$code ?>' type="number" name="officeCode" id="code" >
                <p class="error"><?php echo isset($errors['code']) ? $errors['code'] : ''?></p>
            </div>
             <div>
                <label for="city">City</label>
                <input value='<?=$city ?>' type="text" name="city" id="city" >
                <p class="error"><?php echo isset($errors['city']) ? $errors['city'] : ''?></p>
            </div>
            <div>
                <label for="phone">Phone</label>
                <input value='<?=$phone ?>'type="number" name="phone" id="phone" >
                <p class="error"><?php echo isset($errors['phone']) ? $errors['phone'] : ''?></p>
            </div>
            <div>
                <label for="adressLine1">street</label>
                <input type="text" name="addressLine1" id="adressLine1" >
                <p class="error"></p>
            </div>
            <div>
                <label for="adressLine2">Number</label>
                <input type="text" name="addressLine2" id="adressLine2" >
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
                <label for="postalcode">Postal code</label>
                <input type="number" name="postalCode" id="postalcode" >
                <p class="error"></p>
            </div>
             <div>
                <label for="teritorry">Teritorry</label>
                <input type="number" name="teritorry" id="teritorry" >
                <p class="error"></p>
            </div>
            <div>
                <button name="create">Create</button>
            </div>
        </form>
    </body>
</html>
