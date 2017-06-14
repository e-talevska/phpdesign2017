<?php 
namespace SEDC\DB;

//kodot za komunikacija so bazata - preku ovaa klasa
abstract class DB{
	const DB_HOST = 'localhost';
	const DB_USERNAME = 'root';
	const DB_PASSWORD = '';
	const DB_DB = 'onlineshop';
	protected $db;
	protected $table;

	//konstruktor
	public function __construct(){
		try{

			$this->db = new \PDO("mysql:host=".self::DB_HOST.";"."dbname=".self::DB_DB,self::DB_USERNAME,self::DB_PASSWORD);
			// echo "Connection successfully established. <br>";

		} catch(\PDOException $ex){
			
			echo $ex->getMessage();
		}
		 catch(\Exception $ex){
			
			echo $ex->getMessage();
		}
	} 

	public function save(){

		$properties = get_object_vars($this);
		unset($properties['table']); //remove propertie table from array
		unset($properties['db']); 

		//var_dump(get_object_vars($this));

		//extract the properties names and values in seperate arrays
		$columns = array_keys($properties);
		$values = array_values($properties);


		$statement = "INSERT INTO {$this->table} "."(".implode(',', $columns).") " . " VALUES (" . '"' . implode ('","', $values) . '"' . ")";
		echo $statement;
		return $this->db->exec($statement);
	}


	public function setAttributes($attributes){
		//var_dump($attributes);

		foreach ($attributes as $key => $value) {
			if (property_exists($this, $key)) {
				$this->{$key} = $value;
			
			}
		}
		//var_dump($this);
	}

	public function __destruct(){
		$this->db = NULL;
	}
}

//$db = new DB();
//$db->save($columns,$values);

?>