<?php
namespace SEDC\DB;
require_once '/../db.php';
// require '../db.php';
class Office extends DB{
    public $officeCode;
    public $city;
    public $phone;
    public $addressLine1;
    public $addressLine2;
    public $state;
    public $country;
    public $postalCode;
    public $teritorry;
    
    public function __construct() {
        parent::__construct();
        $this->table = 'officies';
    }
    public function save() {
        //get all properties for object in assoc array
        $properties = get_objects_vars($this);
        unset($properties['table']); // remove property table from array
        //extract the properties names and values in separate values
        $columns = array_keys(get_object_vars($this));
        $values = array_values(get_object_vars($this));
        parent::_save($columns, $values);
// var_dump($columns, $values);
    }
}