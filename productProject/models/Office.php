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
    
    public function fullAddress() {
        return "City: {$this->city}<br>"
        . " Country: {$this->country}<br>"
        . " Postal Code: {$this->postalCode}";
    }
    
    public function readAll() {
        $query = "SELECT * FROM offices";
        $pdoStatementObject = $this->db->query($query, \PDO::FETCH_CLASS, __CLASS__);
        return $pdoStatementObject->fetchAll();
    }
    
    public function fetchById($id) {
        $query = "SELECT * FROM {$this->table} WHERE officeCode = '$id'";
        $pdoStatementObject = $this->db->query($query, \PDO::FETCH_INTO, $this);
        return $pdoStatementObject->fetch();
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

