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
    
    function update() {
        $query = "UPDATE {$this->table} SET ";
        $query.= " city = '$this->city',";
        $query.= " phone = '$this->phone',";
        $query.= " addressLine1 = '$this->addressLine1',";
        $query.= " addressLine2 = '$this->addressLine2',";
        $query.= " state = '$this->state',";
        $query.= " country = '$this->country',";
        $query.= " postalCode = '$this->postalCode',";
        $query.= " territory = '$this->territory'";
        $query.= " WHERE officeCode = '$this->officeCode'";
        return $this->db->exec($query);
    }
    
    function delete($id) {
        $query = "DELETE FROM $this->table WHERE officeCode = '$id'";
         $this->db->exec($query);
//         var_dump($this->db->errorInfo());exit;
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

