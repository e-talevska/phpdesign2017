<?php

	//vrakaat vrednost
	echo abs(0 - 300) ."<br />";
	echo pow(2, 8) ."<br />";
	echo sqrt(100) ."<br />";
	echo fmod(20, 7) ."<br />";
	echo rand(1, 15) ."<br />";
	echo number_format(10000, 2) ."<br />";//prv argument broj so sakam da prikazam, vtor arg so kolku decimali
	$float = 3.14;
	echo round($float, 1) . "<br />";
	echo ceil($float) . "<br />";
	echo floor($float) . "<br />";

	//*******************************
	//*******************************
	//ex01
	
	function ex01($widgets, $price, $tax){
		$brutoPrice = $price + $price * ($tax / 100);
		return number_format($brutoPrice * $widgets, 3);
	}

	$widgets = 30;
	$price = 119.95;
	$tax = 5;

	echo "You are purchasing <b>$widgets</b> widgets at a cost of \$ <b>$price</b> each.<br />With tax of $tax %, the total comes to " . ex01($widgets, $price, $tax);


	//*******************************
	//*******************************
	//ex02

	$string = "maria_sakleva@gmail.com";
	
	function getNameAndDomain($string){
		$domain = substr(strstr($string, "@"), 1);
		$name = strstr($string, '@', true);
		return ['user' => $name, 'domain' => $domain];
	}

	//*******************************
	//*******************************
	//ex03


	function calculateLike($str){
		$str01 =  str_split($str, 2);
		var_dump( $str01);
		$result = '';//za sobiranje 0, za mnozenja 1 , za sobiranje, konkatanacija prazen string
		foreach ($str01 as $key => $value) {		
			if($key == count($str01) - 1){
				$result .= $value;
			}else{
				$result .= $value . ':';
			}
		}
	}

	echo "<br />" . calculateLike("082307");

	//*******************************
	//*******************************
	//ex04

	$sample = '1234567890ABCDEHFOHKMNFOLabcdfhjikolpmzj';
	function generatePass($passL, $str){
		$sample = str_shuffle($str);
		$result = substr($sample, 0, $passL);
		return $result;
	}

	echo generatePass(10, $sample) . "<br />";

	//*******************************
	//*******************************
	//ex05

	$arr = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
	$newarr = [];
	foreach ($arr as $key => $value) {
		if($value > 20){
			array_push($newarr, $value);
			echo $value . " ";
		}

	}
	var_dump($newarr);

	//****************************
	//!!!!!implode od dadena niza pravi string kade so gi lepi eden so drug od zadaden karakter i ja vraka nizata kako string

	$s = implode("-", $newarr);
	var_dump($s);

	//!!!!!!!explode  od daden string pravi niza, kade kazuvame po koj karakter ke go razdvoi stringot vo nizata
	//explode vraka niza

	$e = explode('-', $s);
	var_dump($e);

	//*******************************
	//*******************************
	//ex06

	$str = "Returns a string containing a string representation of all the array elements in the same order, with the glue string between each element.";

	//sekoj zbor kluc, a broj na karakteri kako vrednost
	$exp = explode(" ", $str);
	//var_dump($exp);

	//my version
	// foreach ($exp as $key => $value) {
	// 		$key = $value;
	// 		$value = strlen($value);
	// 		$arr02 = [
	// 			$key => $value
	// 		];
	// 		foreach ($arr02 as $key => $value) {
	// 			echo $key . " : " . $value . "<br />";
	// 		}
	// 		//var_dump($arr02);
	// }
		
	//var_dump($exp);

	//class variation of ex06

	foreach ($exp as $value) {
		$arr02[$value] = strlen($value);
	}

	var_dump($arr02);




 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Built in Functions 11.05.2017</title>
 </head>
 <body>
 	<ul>
 	<?php $nameAndDomain = getNameAndDomain($string);
 			foreach ($nameAndDomain as $key => $value){
 				echo "<li>$key : $value</li>";
 			}
 	 ?>
 	 </ul>
 </body>
 </html>