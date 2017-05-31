<?php

	abstract class Vehicle{
			public $noTires;
			public $noDoors;
			public $engine;
			public $fuel;

			function __construct($noTires,$noDoors,$engine,$fuel){
				echo "Initializing ". __CLASS__." class <br>";
				$this->engine = $engine;
				$this->noTires = $noTires;
				$this->noDoors = $noDoors;
				$this->fuel= $fuel;
			}
			
			public function getPrice(){
						return 2000;
			}
	//podklasite mora da go imaat metodot no mora da bide prebrisen i dokolku imame takov methd mora glavnata klasa da bide abstract-na
			abstract function potrosuvachka($km, $fuelPrice);
	}	


	class Car extends Vehicle{
		public $trunk;
		public $avgConsuming = 6;
		
		function __construct($noTires,$noDoors,$engine,$fuel,$trunk){
			
			echo "Initializing ". __CLASS__." class <br>";
			$this->trunk = $trunk;

			//call vehicle __construct method - in order to initialize other properties
			parent::__construct($noTires,$noDoors,$engine,$fuel);
		}

		

		public function getPrice(){
			
			$noL = (int) $this->trunk; //gets only the number from trunk property
			$basePrice = parent::getPrice();
			
			if($noL > 5){
				return $basePrice + 5000;
			}else{
				return $basePrice + 4000;
			}
		}	
			
		function potrosuvachka($km,$fuel){
				return 100/($this->avgConsuming * $km)* $fuel;
			}
	}
	
	

	final class Truck extends Vehicle{
		public $cabin;
		public $avgConsuming = 16;


		function __construct($noTires,$noDoors,$engine,$fuel,$cabin){
			echo "Initializing ". __CLASS__." class <br>";
			$this->cabin = $cabin;
		
			parent::__construct($noTires,$noDoors,$engine,$fuel);
		}
		
		function potrosuvachka($km,$fuel){
			return 100/($this->avgConsuming * $km)* $fuel;	
		}
	}

	//koga klasata e final, ne moze da nasleduva  
	//class TruckChild extends Truck{

	// }

$honda = new Car(4,5,'2.0 TDI','diesel','41');
echo $honda->getPrice();
var_dump($honda);

$truck1 = new Truck('8',2,'3.0','diesel','');

$vozila = [$honda, $truck1];

foreach ($vozila as $vozilo) {
	echo $vozilo->potrosuvachka(100,70)."<br>";
}


?>