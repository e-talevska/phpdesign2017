<?php
namespace SEDC\DB;
//var_dump(__DIR__);exit;
require_once '/../db.php';

class Office extends DB{
    public $officeCode;
    public $city;
    public $phone;
    public $addressLine1;
    public $addressLine2;
    public $state;
    public $country;
    public $postalCode;
    public $territory;
    
    public function __construct() {
        parent::__construct();
        $this->table = 'offices';
    }
    
    public function save() {
        //get all properties for object in assoc array
        $properties = get_object_vars($this);
        unset($properties['table']); //remove property table from array
        //extract the properies names and values in separate arrays
        $columns = array_keys($properties);
        $values = array_values($properties);
        parent::_save($columns, $values);
    }
}

