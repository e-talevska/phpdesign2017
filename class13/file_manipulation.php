<?php

	namespace SEDC\File;

	class FileManipulation{

		private $handle;
		private $mode;
		//nizi koi ke gi sodrzat vrednostite na modovite za citanje i zapisuvanje failovi
		private static $readModes = ['r', 'r+', 'w+', 'a+'];
		private static $writeModes = ['w', 'a', 'r+', 'w+', 'a+'];

		function __construct($fileName, $mode){
			$this->mode = $mode;
			$this->handle = fopen($fileName, $mode);

		}

		//$valuesToBeSaved is an array
		function write($valuesToBeSaved){
			//self kazuva ovaa klasa kade sto momentalno go definiram self, namesto self moze da stoe imeto na klasata
			if(in_array($this->mode, self::$writeModes)){
				//fseek go donesuva kursorot na krajot na failot oti sakame da praveme append(bez razlika so koj mode sme go otvorile failot) t.e. da pisuvame od kraj na fail ne pocetok
				fseek($this->handle, 0, SEEK_END);
				fputcsv($this->handle, $valuesToBeSaved);
			}
		}

		function readAll(){
			if(in_array($this->mode, self::$readModes)){
				//sakame da odeme na pocetok na failot
				fseek($this->handle, 0);
				//dodeka vraka vrednost razlicna od false
				$result = [];
				while (!feof($this->handle)) {
					//procitaj eden red
					$row = fgetcsv($this->handle);
					//ako nema prazni redovi koi gi dava vo niza kako boolean false samo togas go dodavaj vo niza 
					if($row != false){
						//dodavaj go vo niza
						$result[] = $row;
					}
					
				}
				return $result;
			}

			//ako e otvoren vo mode vo koj ne moze da se cita failot
			return [];
		}

		function __destruct(){
			fclose($this->handle);
		}

	}	

?>