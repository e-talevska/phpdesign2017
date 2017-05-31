<?php

	abstract class Vehicle{

		public $noTires;
		public $noDoors;
		public $engine;
		public $fuel;

		function __construct($noTires, $noDoors, $engine, $fuel){
			echo "Initializing " . __CLASS__ . " class <br/>";
			$this -> noTires = $noTires;
			$this -> noDoors = $noDoors;
			$this -> engine = $engine;
			$this -> fuel = $fuel;
		}

		//if final public - you can't override parent method
		public function getPrice(){
			return 2000;
		}

		//sekoj od podklasite mora da go ima ovoj metod, no mora da go prebrisat i mora da definirat svoj kod za meotodot
		abstract function potroshuvachka($km, $fuelPrice);

	}

	class Car extends Vehicle{

		public $trunk;
		public $avgConsuming = 6;

		function __construct($noTires, $noDoors, $engine, $fuel, $trunk){
			echo "Initializing " . __CLASS__ . " class <br/>";
			$this -> trunk = $trunk;
			//call constructor from Vehicle
			parent::__construct($noTires, $noDoors, $engine, $fuel);
		}

		public function getPrice(){
			//pretvori vo intg vrednost
			$noL = (int)$this->trunk;
			$basePrice = parent::getPrice();
			if($noL > 5){
				return $basePrice + 5000;
			}else{
				return $basePrice + 4000;
			}
		}

		function potroshuvachka($km, $fuelPrice){
			return 100/($this->avgConsuming * $km) * $fuelPrice;
		}

	}

	final class Truck extends Vehicle{

		public $cabin;
		public $avgConsuming = 10;

		function __construct($noTires, $noDoors, $engine, $fuel, $cabin){
			echo "Initializing " . __CLASS__ . " class <br/>";
			$this -> cabin = $cabin;
			parent::__construct($noTires, $noDoors, $engine, $fuel);
		}

		function potroshuvachka($km, $fuelPrice){
			return 100/($this->avgConsuming * $km) * $fuelPrice;
		}

	}

	//class TruckChild extends Truck{}

	$honda = new Car(4, 4, "2.0 TDI", "diesel", "4l");
	echo $honda->getPrice();
	var_dump($honda);
	$truck01 = new Truck(6, 2, "5.0 TDI", "diesel", "2l");

	$vozila = [$honda, $truck01];

	//polimorfizam - probuvame of klasa od tip da povikuvame metod, bez razlika koja klasa e bidejki metodot e skogas definiran
	foreach ($vozila as $vozilo) {
		echo $vozilo -> potroshuvachka(100, 70) . "<br />";
	}

?>