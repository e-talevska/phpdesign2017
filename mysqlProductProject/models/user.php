<?php

	namespace SEDC\DB;
	require_once '/../db.php';

	class User extends DB {

		public $email;
		public $password;
		public $fullName;

		function  __construct(){
			parent::__construct();
			$this->table = 'users';
		}

		function fetchByEmail($email){

			$query = "SELECT * FROM {$this->table} WHERE email = '$email'";
			//pred pdo mora \ bidejki ne sme vo toj namespace
			//toa sto go zimas kako red stavi go vo this objektot
			$pdoStatementObject = $this->db->query($query, \PDO::FETCH_INTO, $this);
			return $pdoStatementObject->fetch();

		}

	}


?>