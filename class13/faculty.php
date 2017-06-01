<?php
	//namespace i ime na klasa ne mora da se isti, namespaceot trbea da e poglobalen i sekogas treba da e prvata linija
	namespace SEDC\Faculty;
	require 'file_manipulation.php';
	//kazuva koja klasa da ja koristi za da ne go pisuvame ovoj kod sekade, a as FM vsusnot mu zadavame alijas, kako da se vika i togas go koristeme alijasot
	use \SEDC\File\FileManipulation; //as FM;

	class Faculty{

		private $name;
		private $id;
		public static $noFaculties = 0;

		function __construct($name){
			//pristapuvanje do static promenliva, pristapuvame do klasata
			//koga kreiras objekt od Fakulty zgolemi ja vrednosta za 1 i stavi ja kako vrednost na this od id;
			$this->id = ++Faculty::$noFaculties;
			$this->setName($name);

		}

		//bidejki se private, za da moze da gi povikame nadvor preku metodot bidejki e public a oni samo po sebe se private

		function getName(){
			return $this->name;
		}

		function getId(){
			return $this->id;
		}

		function setName($name){
			if(trim($name) == ''){
				//exception classes for errors, stavame \ bidejki sme vo namespace Faculty
				throw new \Exception("Name is required.");
				
			}else{
				$this->name = $name;
			}			

		}

		function save(){
			$file = new FileManipulation("faculties.csv", "a");
			$file->write([$this->name]);
		}

		//ova pripaga na klasata i ne mozeme da pristapime do this, bidejki this upatuva na objekt, samo imame metod sto treba da lista fakulteti i e povrzan so objektot fakulteti, no nema logika da e povrzan so instanca od Faculty
		static function read(){
			$file = new FileManipulation("faculties.csv", "r");
			$faculties = $file->readAll();
			var_dump($faculties);
			$result =[];
			//na nulta pozicija 
			foreach ($faculties as $faculty) {
				$result[] = new Faculty($faculty[0]);
			}
			var_dump($result);
			return $result; 
		}

	}

?>