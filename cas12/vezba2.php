<?php
abstract class Vehicle{ //final znaci deka ne smee da se pravi extend
    public $noTires;
    public $noDoors;
    public $engine;
    public $fuel;
    
    
    function __construct($noTires, $noDoors, $engine, $fuel){
        echo "Initializing " .__CLASS__. "class <br>";
        $this->engine = $engine;
        $this->noTires = $noTires;
        $this->noDoors = $noDoors;
        $this->fuel = $fuel;
    }
    
    
    public function getPrice(){ //final znaci deka ne smee da se prebrishuva
    return 2000;
    }
    
    //every child class needs to have this method
    //and they must override it
    abstract function fuelConsumption($km, $fuelPrice);
}

    

//error
//$vehicle = new Vehicle(4,5, '2.0 TDI', 'diesel', '41');

class Car extends Vehicle{
    public $trunk;
    public $avgConsumption = 6;
    
    function __construct($noTires, $noDoors, $engine, $fuel, $trunk){
        $this->trunk = $trunk;
        // call vehicle __construct method 
        //in order to initialize other properties
        parent::__construct($noTires, $noDoors, $engine, $fuel);
        
    }
    public function getPtice(){
        $noL = (int) $this->trunk; //get only the number from trunk property
        $basePrice = parent::getPrice();
        if($noL > 5){
            return $basePrice + 5000;
            
        }else{
            return $basePrice + 4000;
        }
    }
    
    function fuelConsumption($km, $fuelPrice){
        return 100/($this->avgConsumption * $km) * $fuelPrice;
    }
    
}

class Truck extends Vehicle{
    public $cabin;
    public $avgConsumption = 10;
    function fuelConsumption($km, $fuelPrice){
       return 100/($this->avgConsumption * $km) * $fuelPrice;
    }
}

$honda = new Car(4,5, '2.0 TDI', 'diesel', '41');
echo $honda->getPrice();
var_dump($honda);

$truck1 = new Truck ('8',2,'3.0', 'diesel', '');

$vozila = [$honda, $truck1];

foreach ($vozila as $vozilo){
    echo $vozilo->fuelConsumption(100, 70) . "<br>";
}