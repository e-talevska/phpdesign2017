<?php

namespace SEDC\DB;

class DB{
    const DB_HOST = 'localhost';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_DB = 'onlineshop';
    private $db;
    protected $table;


    public function __construct() {
        try {
            $this->db = new \PDO("mysql:host=".self::DB_HOST.";" . "dbname=".self::DB_DB, self::DB_USERNAME, self::DB_PASSWORD);
            echo "Connection successfully establish<br>";
        } catch (\PDOException $ex) {
            echo $ex->getMessage();
        } catch (\Exception $ex) {
            echo $ex->getMessage();
        }
    }
    /**
     * 
     * @param array $columns ['id', 'name', 'lastname']
     * @param type $values
     */
    protected function _save($columns, $values) {
        $statement = "INSERT INTO {$this->table} (".implode(',', $columns).")" . "VALUES ()";
        echo $statement;
        
        // return $this->db->exec($statement);
    }
    public function setAttributes($attributes) {
       foreach ($attributes as $key => $value){
           if(property_exists($this, $key)) {
           $this->{$key} = $value;
           }
        }
    }
    public function __destruct() {
        $this->db = NULL;
    }
  
} 