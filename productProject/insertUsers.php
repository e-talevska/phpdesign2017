<?php
	
$users = [
	[
		'email' => 'sedc@test.com',
		'password' => 'password',
		'fullName' => 'Php mySQL'

	],
	[
		'email' => 'sedc@sedc.com',
		'password' => 'password123',
		'fullName' => 'Sedc'

	],
	[
		'email' => 'john@doe.com',
		'password' => 'password321',
		'fullName' => 'John Doe'

	]
];

$pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');

foreach ($users as $user) {
	$pso = $pdo->prepare('INSERT INTO users (email,password,fullName) '. 'VALUES (:email, :password, :fullName)');
	$pso->bindValue(':email', $user['email'], PDO::PARAM_STR);  	
	$pso->bindValue(':password',password_hash ($user['password'], PASSWORD_DEFAULT), PDO::PARAM_STR); //za enkripcija na password-ot
	$pso->bindValue(':fullName', $user['fullName'], PDO::PARAM_STR);  	

	$pso->execute();
 }

?>