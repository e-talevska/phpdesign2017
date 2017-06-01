<?php 

	namespace SEDC\Faculty;
	
	require 'file_manipulation.php';

	use \SEDC\File\FileManipulation as FM;

	class Faculty{
		private $name;
		private $id;
		public static $noFaculties = 0;

		function __construct($name){
			//increment the static variable $noFaculties
			//and add that value as value of property id for the object that is being created
			$this->id = ++Faculty::$noFaculties;
			$this->setName($name);
		}

		function getName()
		{
			return $this->name;

		}

		function getId()
		{
			return $this->id;
		}

		function setName($name)
		{
			if(trim($name) == ''){
				throw new \Exception("Name is required");
			}else{
				$this->name = $name;
			}
		}

		function save()
		{
			$file = new FM("faculties.csv", "a+");
			$file->write([$this->name]);
		}

		static function read()
		{
			$file = new FM("faculties.csv", "r");
			$faculties = $file->readAll();
			var_dump($faculties);

			foreach ($faculties as $faculty) {
				$result[] = new Faculty($faculty[0]);
			}
			return $result;
		}
	}


 ?>