<?php

function connect(){
	$pdo = new PDO('mysql:host=localhost;dbname=exercise','root','');
	return $pdo;
}

//za proverka dali ima takov username - return true of username exists,otherwise false
function checkIfUsernameExists($username,$column = 'username'){
	$pdo = connect();
	
	// SELECT - za da procitame od baza
	$sql = "SELECT `id` FROM `users` WHERE `$column` = '$username'";
	
	//ja vrsime komandata *exec na pdo- isprakja komandi do sql(insert,update,delete); OR *query- vrakja informacii(nov objekt-pdo statment object koj e rezultat na pdo query)
	$pst = $pdo->query($sql, PDO::FETCH_ASSOC);

	//za citanje na info. FETCH-zema eden po eden zapis(za username ni treba ova), FETCH_ALL-gi zema site
	$result = $pst->fetch();

	//ako $result ne dobie nieden zapis vrakja false
	return ($result === FALSE) ? FALSE : TRUE;
}

function insertUser($params){
	$pdo = connect();
	$sql = "INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `email`, `phone`, `dob`, `gender`) ";
	$sql .= " VALUES ('".trim($params['username'])."', '".password_hash($params['password'], PASSWORD_DEFAULT)."', '{$params['firstname']}', '{$params['lastname']}', '{$params['email']}', '{$params['phone']}', '". date('Y-m-d', strtotime($params['dob'])) ."', '{$params['gender']}' )";
	//echo $sql; exit;
	return $pdo->exec($sql);
}
function fetchUsers(){
	$pdo = connect();
	$sql = "SELECT `username`, `firstname`, `lastname` FROM `users`";
	$pst = $pdo->query($sql, PDO::FETCH_ASSOC);
	return $pst->fetchAll();
}

?>