<?php
namespace SEDC\File;

class FileManipulation{
	private $handle;
	private $mode;
	private static $readModes = ['w+','a+','r','r+'];
	private static $writeModes = ['w','w+','a','a+','r+'];

	function __construct($fileName,$mode){
		$this->mode = $mode;
		$this->handle =fopen($fileName, $mode);
	}

/**
*
* @ param array $valuesToBeSaved
*
*/
	function write($valuesToBeSaved){
		if (in_array($this->mode, self::$writeModes)) {
		
			//go to the end of file	
			fseek($this->handle,0, SEEK_END); //go nosi kursorot na krajot od file-ot
			fputcsv($this->handle, $valuesToBeSaved);
			return TRUE;
		}

		return FALSE;
	}

	function readAll(){
		if (in_array($this->mode, self::$readModes)) {
		
			//go to the beginning of the file
			fseek($this->handle, 0);

			$result =[];
			
			while (feof($this->handle) == FALSE){
				$row = fgetcsv($this->handle);
				if($row != FALSE){
					$result[] = $row;
				}
			}
			return $result;
		}
		return [];
	}

	function __destruct(){
		fclose($this->handle);
	}
}


?>