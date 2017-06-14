<?php
namespace SEDC\DB;
require_once '/../db.php';


/**
* 
*/
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

	public function __construct(){
		parent:: __construct();
		$this->table = 'offices';
	}

	public function fullAddress(){
		return "City: {$this->city}<br>".
			   "Country: {$this->country}<br>".
			   "Postal Code: {$this->postalCode}<br>";
	}

//rabotat konkretno so office
	public function readAll(){
		$query = "SELECT * FROM offices"; //site rezultati od office
		$pdoStatementObject = $this->db->query($query, \PDO::FETCH_CLASS, __CLASS__);
		return $pdoStatementObject->fetchAll();
	}

	public function fetchById($id){
		$query = "SELECT * FROM {$this->table} WHERE officeCode = '{$id}'";
		$pdoStatementObject = $this->db->query($query, \PDO::FETCH_INTO, $this);
		return $pdoStatementObject->fetch();
	}

	function update(){
		$query = "UPDATE {$this->table} SET";
		$query .= " city = '$this->city',"; 
		$query .= " phone = '$this->phone',"; 
		$query .= " addressLine1 = '$this->addressLine1',"; 
		$query .= " addressLine2 = '$this->addressLine2',"; 
		$query .= " state = '$this->state',"; 
		$query .= " country = '$this->country',"; 
		$query .= " postalCode = '$this->postalCode',"; 
		$query .= " territory = '$this->territory'";
		$query .= " WHERE officeCode = '$this->officeCode'";
		return $this->db->exec($query);
	}

	function delete($id){
		$query = "DELETE FROM $this->table WHERE officeCode = '$id'";
		return $this->db->exec($query);
		//za naoganje na error-i - var_dump($this->db->errorInfo());
	}
	
	// public function save(){
	// //get all properties from objects in associative array
	// 	$properties = get_object_vars($this);
	// 	unset($properties['table']); //remove propertie table from array

	// 	//var_dump(get_object_vars($this));

	// 	//extract the properties names and values in seperate arrays
	// 	$columns = array_keys($properties);
	// 	$values = array_values($properties);
	// 	//var_dump($columns,$values);

	// 	parent::_save($columns, $values);
	// }

// ista f-ija samo vrednostite gi zemame od soodvetninte property
	// public function save(){
	// 	$statment = "INSERT INTO offices"
	// 	."(officeCode, city, phone)"
	// 	."VALUES('$this->officeCode', '$this->city', '$this->phone')";

	// 	$this->db->exec($statment);
	// }

}


?>