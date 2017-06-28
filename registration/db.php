<?php

function connect() {
    $pdo = new PDO('mysql:host=localhost;dbname=exercise', 'root', '');
    return $pdo;
}

// Returns tru if username exists
//false otherwise
function checkifUsernameExists($username, $column='username'){
    $pdo = connect();
    $sql = "SELECT `id` FROM `users` WHERE `$column` = '$username'";
    $pst = $pdo->query($sql, PDO::FETCH_ASSOC);
    $result = $pst->fetch();
    //result is false if no entry was found in base
    return($result === FALSE) ? FALSE : TRUE;
    
}

function insertUser($params){
    $pdo = connect();
    $sql = "INSERT INTO `users` (`username`, `password`, `firstname`, `lastname`, `email`, `phone`, `dob`, `gender`, `profile`) ";
$sql .= " VALUES ('".trim($params['username'])."','".password_hash($params['password'], PASSWORD_DEFAULT)."', '{$params['firstname']}', '{$params['lastname']}',"
    . "'{$params['email']}', '{$params['phone']}','".date('Y-m-d', strtotime($params['dob'])) ."', '{$params['gender']}', '{$params['profile']}')";
//echo $sql;exit;
return $pdo->exec($sql);
}
function fetchUsers(){
    $pdo = connect();
    $sql = "SELECT `username`, `firstname`, `lastname`, `profile` FROM `users`";
    $pst = $pdo->query($sql, PDO::FETCH_ASSOC);
    return $pst->fetchAll();
}
