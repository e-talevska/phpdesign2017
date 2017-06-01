<?php
namespace SEDC\File;
class FileManipulation {
    private $handle;
    private $mode;
    private static $readModes = ['r', 'r+', 'w+', 'a+'];
     private static $writeModes = ['w','a','r', 'r+', 'w+', 'a+'];
    
    function __construct($fileName, $mode){
        $this->mode= $mode;
        $this->handle = fopen($fileName, $mode);
    }


/**
 * 
 * @param array $valuesToBeSaved
 */


function write($valuesToBeSaved){
    if(in_array($this->mode, self::$writeModes)) //klasata kaj sto sum momentalno self === FileManipulation
    {//go to the endof the file
        fseek($this->handle, 0, SEEK_END); //seek end pocnuvame od krajot da broime, a bez seek end pocnuva od pocetok
        fputcsv($this->handle, $valuesToBeSaved);
        return TRUE;
        
    }
    return FALSE;
}

function readAll(){
    if(in_array($this->mode, self::$readModes)){
        //go to the begining of the file
        fseek($this->handle, 0);
        $result = [];
        while(feof($this->handle)== FALSE){
            $row = fgetcsv($this->handle);
            if($row !=FALSE){
            $result[] = $row;
            }
        }
        
        return $result;
    }
    
    return[];
}
function __destruct(){
    
    fclose($this->handle);
}



}
