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
    
//    public function save() {
//        
//        $statement = "INSERT INTO offices "
//        . "(officeCode, city,phone) "
//        . " VALUES ('$this->officeCode', '$this->city', '$this->phone')";
//        
//        $this->db->exec($statement);
//    }
}

