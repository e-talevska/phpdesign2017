<?php

abstract class Vehicle {
    public $noTires;
    public $noDoors;
    public $engine;
    public $fuel;
    
    function __construct($noTires, $noDoors, $engine, $fuel) {
        echo "Initializing " . __CLASS__ . " class <br>";
        $this->engine = $engine;
        $this->noTires = $noTires;
        $this->noDoors = $noDoors;
        $this->fuel = $fuel;
    }
    
    public function getPrice() {
        return 2000;
    }
    
    //every child class needs to have this method
    //and they must override it
    abstract function potroshuvachka($km, $fuelPrice);
}
//error
//$vehicle = new Vehicle(4,5,'2.0 TDI','diesel');

class Car extends Vehicle {
    public $trunk;
    public $avgConsuming = 6;
            
    function __construct($noTires, $noDoors, $engine, $fuel, $trunk) {
        echo "Initializing " . __CLASS__ . " class <br>";
        $this->trunk = $trunk;
        //call Vehicle __construct method
        //in order to initialize other properties
        parent::__construct($noTires, $noDoors, $engine, $fuel);
    }
    
    public function getPrice() {
        $noL = (int)  $this->trunk; //get only the number from trunk property
        $basePrice = parent::getPrice();
        if($noL > 5) {
            return $basePrice + 5000;
        } else {
            return $basePrice + 4000;
        }
    }
    
    function potroshuvachka($km, $fuelPrice) {
        return 100/($this->avgConsuming * $km) * $fuelPrice;
    }
}

final class Truck extends Vehicle {
    public $cabin;
    public $avgConsuming = 10;

    function __construct($noTires, $noDoors, $engine, $fuel, $cabin) {
        echo "Initializing " . __CLASS__ . " class <br>";
        $this->cabin = $cabin;
        parent::__construct($noTires, $noDoors, $engine, $fuel);
    }
    
    function potroshuvachka($km, $fuelPrice) {
        return 100/($this->avgConsuming * $km) * $fuelPrice;
    }
}

//class TruckChild extends Truck {
//    
//}

$honda = new Car(4,5,'2.0 TDI','diesel','4l');
echo $honda->getPrice();
var_dump($honda);

$tuck1 = new Truck('8',2,'3.0', 'diesel', '');

$vozila = [$honda, $tuck1];

foreach ($vozila as $vozilo) {
    echo $vozilo->potroshuvachka(100, 70) . "<br>";
}