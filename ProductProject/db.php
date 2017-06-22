<?php
namespace SEDC\DB;

abstract class DB {
    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_DB = 'onlineshop';
    protected $db;
    protected $table;


    public function __construct() {
        try{
            $this->db = new \PDO("mysql:host=" . self::DB_HOST . ";" . "dbname=" . self::DB_DB, self::DB_USERNAME, self::DB_PASSWORD);
            echo "Connection succesfully established <br />" ;
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
    /**
     * 
     * @param array $columns ['id', 'name', 'lastName']
     * @param type $values
     */
    public function save(){
        $propeties = get_object_vars($this);
        unset($propeties['table']);
        unset($propeties['db']);
        $columns = array_keys($propeties);
        $values = array_values($propeties);
//        var_dump($propeties, $columns, $values);exit;
        
        $statement = "INSERT INTO {$this->table}" . "(" .implode(',' , $columns) .  ")"
                . " VALUES (". '"' . implode('","' , $values) . '"' . ")";
//        var_dump($statement);exit;
        return $this->db->exec($statement);
//        $this->db->exec($statement);
    }
    
    public function setAttributes($attributes){
        foreach ($attributes as $key => $value) {
            if(property_exists($this, $key)){
                $this->{$key} = $value;
            }
        }
    }

    public function __destruct() {
        $this->db = null;
    }
    
}
//$db = new \DB();