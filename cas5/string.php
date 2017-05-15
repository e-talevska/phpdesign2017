<?php 

// 	function generateRandomPass($length){
// 		$string = "1234QWERTYBVPojdurnampcx";
// 		$random = str_shuffle($string);
// 		return substr($random, 0, $length); //from the beginning of the string
// 		return substr($random, -$length); //from the end of the string
		

// 	}

// echo generateRandomPass(8);



	$niza = [2,5,6,10,41,24,32,9,16,19];
	$resultNiza = [];
	for ($i=0; $i < count($niza); $i++){
		
		if($niza[$i] > 20){
			// $resultNiza[] = $niza[$i];
			array_push($resultNiza,$niza[$i]);

		}
	}
	

var_dump($resultNiza);
$s = implode ("-",$resultNiza);
echo $s;
var_dump(explode('-',$s));
var_dump(explode('-',2));


$string = "PHP is a widely-used general-purpose scripting language";

$words = explode(" ",$string);
	foreach($words as $word){
		$resultNiza[$word] = strlen($word);
	
}
var_dump($resultNiza);

// $info = [
// 	'name' => 'John',
// 	'lastName' => 'Doe'

// ];






 ?>