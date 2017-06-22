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


	function insertUser($params){
		$pdo = connect();
		$sql = "INSERT INTO `users` ('username', 'password', 'firstname', 'lastname', 'dob', 'phone', 'email', 'gender' )";
		//na ista promenliva na kraj dodadi neso
		$sql .= " VALUES ('".trim($params['username'])." ', '". password_hash($params['password'], PASSWORD_DEFAULT) ."', " . " '{$params['firstname']}', '{$params['lastname']}', '{$params['email']}', '{$params['phone']}', '". date('Y-m-d', strtotime($params['dob'])) ."', '{$params['gender']}' )";
		echo $sql;exit;
		return $pdo ->exec($sql);
	}

?>