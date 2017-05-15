<?php 

	function calc($widget){
		// $widget = 30;
		$cost = 119.95;
		$tax = 0.05;
		$sum = ($widget * $cost);
		$total = number_format($sum + ($sum * $tax), 2);
		echo "You are purchasing <b>$widget</b> widget(s) at a cost of <b>$$cost</b> each. With tax, the total comes to <b>$$total</b>.<br>";
	}

	calc(5);
	calc(10);
	calc(20);
	calc(30);
	echo "<br>-------------------------------<br>";

	$string = "nameeee@example.com";
	echo strstr($string, '@') . '<br>'; // od toj karakter nataka pechati

function getNameAndDomain($string){
	$domain = substr(strstr($string, '@'), 1); // od toj karakter, plus edna pozicija nataka pechati (bez nego)
	echo $domain . '<br>';

	$name = strstr($string, '@', true); // do toj karakter
	echo $name . "<br>";

	return [
	'username' => $name, 
	'domain', $domain
	];
}
	echo "<br>-------------------------------<br>";

function createClock($str){
	// $str = "082307";
	$strSpl = str_split($str, 2);
	// return ['username' =>$name, 'domain' =>  $domain];

	echo "$strSpl[0]:$strSpl[1]:$strSpl[2]";

	// for($i=0; $i<sizeOf($strSpl); $i++){
	// 	if($strSpl[$i] == sizeof($strSpl)){
	// 	echo "$strSpl[$i]";

	// 	}else{
	// 	echo "$strSpl[$i]:";
	// 	} 
	// }
}
	createClock(654985);

	echo "<br>-------------------------------<br>";


	function generatePass($length){
		$string = '1234567890qwertyuiopasdfghjklzxcmnbvQWEPOIRTYUASDLKJHFGZMNBXCV';

		$random = str_shuffle($string);
		$pass = substr($random, 0, $length);
		echo $pass;
	}

	generatePass(13);


	echo "<br>-------------------------------<br>";

	$arr = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
	$arrNova = [];
						// FOR CIKLUS
	// for($i=0; $i < count($arr); $i++){
	// 	if( $arr[$i] > 20){
	// 		array_push($arrNova, $arr[$i]);
	// 	}
	// }
						// FOREACH CIKLUS
	foreach($arr as $value){
		if($value > 20){
		array_push($arrNova, $value);
		}
	}

	var_dump($arrNova);
	
	$s = implode(", ", $arrNova); //
	echo "implodiran string s: $s";

	var_dump(explode(',', $s));

	echo "<br>-------------------------------<br>";


	$s = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
 tempor incididunt ut labore et dolore magna aliqua.";

 $wordsArr = explode(' ', $s);
var_dump($wordsArr);

$newArr = [];

foreach ($wordsArr as $word) { // word vrednosta ja stavame kako indeks
	$newArr[$word] = strlen($word);

	// $num = strlen($word);
	// array_push($newArr, $num);
}
var_dump($newArr);


$info = [
	'name' => 'John',
	'lName' => 'Doe'
];

$info['age'] = 23; // deka ne postoi ova vo nizata, se kreira

echo $info['name']; // si pravime nashi indeksi odnosno kluchevi








 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 
 	<ul>
 		 <!-- <?php 
 			$nameAndDomain = getNameAndDomain($string);
 			foreach($nameAndDomain as $key => $value){
 				// echo "<li>$key: $value</li>";
 			}

	


 		 ?>  -->
 	</ul>
 </body>
 </html>