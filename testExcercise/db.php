<?php

	function connect(){
		$pdo = new PDO('mysql:host=localhost;dbname=exercise', 'root', '');
		return $pdo;
	}

	//return true if username exist, false otherwise
	// imeto za kolonata za koja proveruvam dali ima zapis ke go vidam od promenlivata $column
	function checkIfUsernameExist($username, $column = 'username'){
		//SELECT COUNT() vraka broj na redici so go zadovoluvaat uslovot kade ke gi izbroi zapisite koj sto imaat vakov username
		$pdo = connect();
		$sql = "SELECT `id` FROM `users` WHERE `$column` = '$username'";
		//exec ja koristime so insert, update, delete, koga ne ocekuvame podatoci nazad tuku zadavem komandi
		$pdoStatementObject = $pdo->query($sql, PDO::FETCH_ASSOC);
		$result = $pdoStatementObject->fetch();
		//var_dump($result);
		//rezultatot e false ako ne postoi username vo bazata, ako ne vrati true
		return ($result  === FALSE) ? FALSE : TRUE;
	}

	
	function insertUser($param){
		$pdo = connect();
		$sql = "INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `dob`, `phone`, `email`, `gender`, `profile`) ";
		$sql .= " VALUES ('{$param['username']}', '" . password_hash($param['password'], PASSWORD_DEFAULT) . "', '{$param['firstname']}', '{$param['lastname']}', '" . date('y-m-d', strtotime($param['dob'])) . "', '{$param['phone']}', '{$param['email']}', '{$param['gender']}', '{$param['profile']}')";
		// echo $sql;exit;
		return $pdo->exec($sql);
		// var_dump($pdo->errorInfo());exit;
	}


	function fetchUsers(){
		$pdo = connect();
		$sql = "SELECT `username`, `firstname`, `lastname`, `profile` FROM `users`";
		$pst = $pdo->query($sql, PDO::FETCH_ASSOC);
		return $pst->fetchAll();
	}


?>