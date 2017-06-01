<?php
namespace SEDC\File;

class FileManipulation {
    private $handle;
    private $mode;
    private static $readModes = ['r','r+', 'w+', 's+'];
    private static $writeModes = ['w', 'a', 'r+', 'w+', 'a+'];
    
    function __construct($fileName, $mode) {
        $this->mode = $mode;
        $this->handle = fopen($fileName, $mode);
    }
    /**
     * 
     * @param array $valuesToBeSaved
     */
    function write($valuesToBeSaved) {
        if(in_array($this->mode, self::$writeModes)) {
            fseek($this->handle, 0, SEEK_END);
            fputcsv($this->handle, $valuesToBeSaved);
            return TRUE;
        }
        
        return FALSE;
    }
    function readAll() {
        if(in_array($this->mode, self::$readModes)) {
            // go to the beggining of file
            fseek($this->handle, 0);
            $result = [];
            while (feof($this->handle) == FALSE) {
                $row = fgetcsv($this->handle);
                if($row != FALSE){
                $result[] = $row;
                } 
            }
            return $result;
        }
        
        return [];
    }
    
    function __destruct() {
        fclose($this->handle);
    }
}

