<?php
namespace SEDC\DB;

require_once '/../db.php';

class User extends DB {
    public $email;
    public $password;
    public $fullName;
    
    public function __construct() {
        parent::__construct();
        $this->table = 'users';
    }
    
    function fetchByEmail($email){
        $query = "SELECT * FROM {$this->table} WHERE email = '{$email}'";
        $pso = $this->db->query($query, \PDO::FETCH_INTO, $this);
        return $pso->fetch();
    }
}
