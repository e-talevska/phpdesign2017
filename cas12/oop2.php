<?php

abstract class Vehicle{
    public $noTires;
    public $noDoors;
    public $engine;
    public $fuel;
    
    function __construct($noTires, $noDoors, $engine, $fuel) {
        echo "Initializing " . __CLASS__ . " class <br />";
        $this->engine = $engine;
        $this->noTires = $noTires;
        $this->noDoors = $noDoors;
        $this->fuel = $fuel;
    }
    
    function getPrice(){
        return 2000;
    }
    
    abstract function consuming($km, $fuelPrice); 
}

class Car extends Vehicle{
    public $trunk;
    public $avgConsuming = 6;
    
    function __construct($noTires, $noDoors, $engine, $fuel, $trunk) {
        echo "Initializing " . __CLASS__ . " class <br />";
        $this->trunk = $trunk;
        parent::__construct($noTires, $noDoors, $engine, $fuel);
    }
    
    function getPrice() {
        $noL = (int) $this->trunk;
        $basePrice = parent::getPrice();
        if($noL > 5){
            return $basePrice + 5000;
        } else {
            return $basePrice + 4000;
        }
    }
    function consuming($km, $fuelPrice){
        return 100/($this->avgConsuming * $km) * $fuelPrice;
    }
}

final class Truck extends Vehicle{
    public $cabin;
    public $avgConsuming = 10;
    function __construct($noTires, $noDoors, $engine, $fuel, $cabin) {
        echo "Initializing " . __CLASS__ . " class <br />";
        $this->cabin = $cabin;
        parent::__construct($noTires, $noDoors, $engine, $fuel);
    }
    function consuming($km, $fuelPrice){
        return 100/($this->avgConsuming * $km) * $fuelPrice;
    }
    
}

//class TruckChild extends Truck{
//    
//}


$honda = new Car(4,5,'2.0 TDI', 'diesel', '4l');
echo $honda->getPrice();
var_dump($honda);

$truck1 = new Truck(8,2,'3.0','diesel', 'asdf');

$vozila = [$honda, $truck1];

foreach ($vozila as $vozilo){
    echo $vozilo->consuming(100, 70);
}
