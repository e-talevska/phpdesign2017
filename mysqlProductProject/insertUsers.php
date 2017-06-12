<?php

	$users = [

		[

			'email' => 'sedc@test.com',
			'password' => 'password',
			'fullName' => 'Php MySQL'

		],
		[

			'email' => 'sedc2@test.com',
			'password' => '123',
			'fullName' => 'Sedc'

		],
		[

			'email' => 'johndoe@test.com',
			'password' => '321',
			'fullName' => 'John Doe'

		]

	];

	$pdo = new PDO('mysql:host=localhost;dbname=onlineshop', 'root', '');
	foreach ($users as $user) {
		//:email , dve tocki e animal id ili alijas so moze posle da se zameni, sintaksa
		//$pdo->prepare vraka neso nazad i zatoa go stavame vo promenliva prepare statement

		$pso = $pdo->prepare('INSERT INTO users (email, password, fullName) VALUES (:email, :password, :fullName) ');
		//custom metod vo pDO, Value_str za da go stavi vo navodnici, bindValue go zamenuva alijasot so real vrednost
		//bindValue se koristi koga imame promenlivi i ne se vrzuva so vrednosta tuku so promenlivata, a bindValue se vrzuva so momentalnata vrednost
		$pso->bindValue(':email', $user['email'], PDO::PARAM_STR);
		$pso->bindValue(':fullName', $user['fullName'], PDO::PARAM_STR);
		$pso->bindValue(':password', password_hash($user['password'], PASSWORD_DEFAULT), PDO::PARAM_STR);

		$pso->execute();
	}


?>