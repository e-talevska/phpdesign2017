<?php

	namespace SEDC\DB;
	//require_once broi kolku pati sme napisale require_once i go vklucuva failot samo ednas, i ako e ednas vklucen nema da go vkluci vtor pat
	require_once '/../db.php';

	//ke gi nasledi site protected i public property i moze da gi menuva i da pravi overwrite
	class Office extends DB{

		//gi imenuvame isto kako kolonite vo offices tabela
		public $officeCode; 
		public $city; 
		public $phone; 
		public $addressLine1; 
		public $addressLine2; 
		public $state; 
		public $country; 
		public $postalCode; 
		public $territory;
		//sekoj model od klasata ke ima del za koj ke bide odgovoren 

		//ako ne go definirame construct metodot toj ke se povika od parent klasa
		public function __construct(){
			parent::__construct();
			$this->table = 'offices';
		}

		public function fullAddress(){
			return "<br />City: {$this->city}<br /> Country: {$this->country}<br/> Postal code:{$this->postalCode}<br/>";
		}

		//citanje na site offices od baza
		//kaj staticni metodi ne vrzuvame so objekt tuku klasa, ne ni treba instanca i kaj staticka funkcija nemame objekt(i ne mozeme da koristeme $this)!
		//sakame d akreira objekt od baza i informaciite da gi stavi kako property
		public function readAll(){
			$query = "SELECT * FROM {$this->table}";
			//query e metod na PDO, __CLASS__ samo go pecati office oti nema parametri za da gi piseme
			//ova e vsusnost PDO statement koj so go koristime za da citame vrednosti
			//dobivame niza kade sekoj element e objekt so ni go ovozmozuva PDO::FETCH_CLASS
			//$pdoStatementObject e vsusnost objekt na PDO, ne e samo rezultat od funkcijata query
			$pdoStatementObject = $this->db->query($query, \PDO::FETCH_CLASS, __CLASS__);
			return $pdoStatementObject->fetchAll();
		}

		public function fetchById($id){
			//officeCode e strin, varchar i ni trebat navodnici
			$query = "SELECT * FROM {$this->table} WHERE officeCode = '$id'";
			//vo objektot vo koj ke ja povikuvame funkcijata go iskoristuvame kako prametar na metodot query, pravo tamu da gi zapisuva podatocite $this i zatoa posle vo edit.php ni go dava za momentalniot objekt vrednostite
			$pdoStatementObject = $this->db->query($query, \PDO::FETCH_INTO, $this);
			//ne stavame fetchAll() bidejki ni treba smao office Code ne se.
			var_dump($pdoStatementObject->fetch());
		}

	}

?>