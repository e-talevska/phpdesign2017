<?php
    require 'functions.php' ;
    $title = 'SEDC';
    $name = null;
    var_dump($name); 
    var_dump(isset($title));
    var_dump(isset($name01));
    //isset gleda d aima definicija za promenlivata i da nema vrednost null i samo vo toj slucaj vraka null
    echo true;
    //type casting
    $var = "53";
    (integer)$var;
    settype($var, 'integer');
    var_dump($var);
    
    $foo = "0";
    $foo += 2;
    var_dump($foo);
    $foo += 2.43543;
    var_dump($foo);
    $foo += "Lalala";
    var_dump($foo);
    $foo += 3 + "Lalala";
    var_dump($foo);
?>
<?php include 'includes/header.php' ?>
<?php var_dump($_SERVER); ?>
        <h1><?php echo hello(); ?></h1>
<?php include 'includes/footer.php'  ?>   


