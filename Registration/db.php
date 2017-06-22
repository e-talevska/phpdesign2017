<?php

function connect(){
	$pdo = new PDO("mysql:host=localhost;dbname=exercise", 'root', '');
	return $pdo;
}

function checkIfUsernameExists($username, $column = 'username'){
	$pdo = connect();
	$sql = "SELECT `id` FROM `users` WHERE `$column` = '$username'";
	$pst = $pdo->query($sql, PDO::FETCH_ASSOC);
	$result = $pst->fetch();
	// var_dump($result);
	return ($result === FALSE) ? FALSE : TRUE;
}

function insertUser($param){
	$pdo = connect();
	$sql = "INSERT INTO `users` (`username`, `password`, `firstName`, `lastName`, `dob`, `phone`, `email`, `gender`) ";
	$sql .= " VALUES ('{$param['username']}', '" . password_hash($param['password'], PASSWORD_DEFAULT) . "', '{$param['firstName']}', '{$param['lastName']}', '" . date('y-m-d', strtotime($param['dob'])) . "', '{$param['phone']}', '{$param['email']}', '{$param['gender']}')";
	// echo $sql;exit;
	return $pdo->exec($sql);
}

function fetchUsers(){
	$pdo = connect();
	$sql = "SELECT `username`, `firstName`, `lastName` FROM `users`";
	$pst = $pdo->query($sql, PDO::FETCH_ASSOC);
	return $pst->fetchAll();
}