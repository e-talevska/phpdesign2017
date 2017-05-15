<?php 

	$allChar = "123456789ABCDEFGHIJKLMNOPQRSTUVWXYZabcdieghijklmnopqrstuvwxyz";
	$randomize = str_shuffle($allChar);
	$length = rand(6, 8);

	$password = substr($randomize, 0, $length);
	echo "Password: " . $password . "<br>";

	$lorem = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod";
	$thisArray = explode(" ", $lorem);
	var_dump($thisArray);

	foreach ($thisArray as $key =>  $value) {
		$key = (strlen($value));
		echo $value . "   " . $key . "<br>";
	}

	var_dump($thisArray);


	// $myArray = [2, 5, 6, 10, 41, 24, 32, 9, 16, 17];
	// $bigArray = [];
	// echo sizeof($myArray);

	// for($i = 0; $i < sizeof($myArray); $i++){
	// 	if ($myArray[i] > 20) {
	// 		echo $i;
	// 		array_push($bigArray, $myArray[i]);
	// 	}else{
	// 		echo "$i";
	// 	}
	// };

	// var_dump($bigArray);

	// for ($j = 0; $j > sizeof($bigArray); $j+1){
	// 	echo ($bigArray[j] . "<br>");
	// };
 ?>