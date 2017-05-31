<?php 

	abstract class Vehicle{
		public $noTires;
		public $noDoors;
		public $engine;
		public $fuel;

		function __construct($noTires, $noDoors, $engine, $fuel)
		{
			echo "Initializing " . __CLASS__ . " class <br>";
			$this->engine = $engine;
			$this->noTires = $noTires;
			$this->noDoors = $noDoors;
			$this->fuel = $fuel;
		}

		public function getPrice()
		{
			return 2000;
		}

		//every child class needs to have this methot, but it must be overwritten
		abstract function potroshuvachka($km, $fuelPrice);
	}

	class Car extends Vehicle{
		public $trunk;
		public $averageConsuming = 10;

		function __construct($noTires, $noDoors, $engine, $fuel, $trunk)
		{
			echo "Initializing " . __CLASS__ . " class <br>";
			$this->trunk = $trunk;
			parent::__construct($noTires, $noDoors, $engine, $fuel);
		}

		public function getPrice()
		{
			$noL = (int) $this->trunk; //parse
			$basePrice = parent::getPrice();
			if ($noL > 5) {
				return $basePrice + 5000;
			}else{
				return $basePrice + 4000;
			}
		}

		function potroshuvachka($km, $fuelPrice){
			return 100/($this->averageConsuming * $km) * $fuelPrice;
		}
	}

	class Truck extends Vehicle{
		public $cabin;
		public $averageConsuming = 6;

		function __construct($noTires, $noDoors, $engine, $fuel, $cabin)
		{
			echo "Initializing " . __CLASS__ . " class <br>";
			$this->cabin = $cabin;
			parent::__construct($noTires, $noDoors, $engine, $fuel);
		}

		function potroshuvachka($km, $fuelPrice){
			return 100/($this->averageConsuming * $km) * $fuelPrice;
		}
	}

	$honda = new Car(4, 5, "2.0 TDI", "diesel", "41");
	echo $honda->getPrice();
	var_dump($honda);

	$truck1 = new Truck('8', 2, '3.0', 'diesel', '2');
	var_dump($truck1);

	$vozila = [$honda, $truck1];

	foreach ($vozila as $vozilo){
		echo $vozilo->potroshuvachka(100, 70) . "<br>";
	}
