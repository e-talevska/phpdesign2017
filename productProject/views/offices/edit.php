<?php
require '../../models/office.php';
if(!isset($_GET['id'])){
    header('Location: list.php');exit;
}
$office = new SEDC\DB\Office();
if($office->fetchById($_GET['id']) === FALSE) {
   header('Location: list.php');exit;
}
$code = $office->officeCode;
$city = $office->city;
$phone = $office->phone;
$street = $office->addressLine1;
$number = $office->addressLine2;
$state = $office->state;
$country = $office->country;
$postalcode = $office->postalCode;
$territory = $office->territory;
$errors = [];
if($_SERVER['REQUEST_METHOD'] == 'POST'){
   // $code = $_POST['officeCode'];
    $city = $_POST['city'];
    $phone = $_POST['phone'];
    $street = $_POST['addressLine1'];
    $number = $_POST['addressLine2'];
    $state = $_POST['state'];
    $country = $_POST['country'];
    $postalCode = $_POST['postalCode'];
    $teritorry = $_POST['territory'];
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
        $errors['teritorry'] = 'Territory code is required';
    }


    // Check if validations is succsessfull
    if(empty($errors)) {
        //Validation ok
        //$office = new SEDC\DB\Office();
        $office->setAttributes($_POST);
        $office->update();
        header('Location: list.php');exit;
    }
}
?>

<html>
    <head>
        <title>EDIT</title>
    </head>
    <body>
        <h1>Edit</h1>
        <form method="POST" action="">
<!--            <div>
                <label for="code">Code</label>
                <input value='<?=$code ?>' type="number" name="officeCode" id="code" >
                <p class="error"><?php echo isset($errors['code']) ? $errors['code'] : ''?></p>
            </div>-->
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
                <input value='<?=$street ?>'type="text" name="addressLine1" id="adressLine1" >
                <p class="error"></p>
            </div>
            <div>
                <label for="adressLine2">Number</label>
                <input value='<?=$number ?>'type="number" name="addressLine2" id="adressLine2" >
                <p class="error"></p>
            </div>
            <div>
                <label for="state">State</label>
                <input value='<?=$state ?>'type="text" name="state" id="state" >
                <p class="error"></p>
            </div>
            <div>
                <label for="country">Country</label>
                <input value='<?=$country ?>'type="text" name="country" id="country" >
                <p class="error"></p>
            </div>
            <div>
                <label for="postalcode">Postal code</label>
                <input value='<?=$postalcode ?>'type="number" name="postalCode" id="postalcode" >
                <p class="error"></p>
            </div>
             <div>
                <label for="territory">Territory</label>
                <input value='<?=$territory ?>'type="text" name="territory" id="territory" >
                <p class="error"></p>
            </div>
            <div>
                <button name="create">Create</button>
            </div>
        </form>
    </body>
</html>


