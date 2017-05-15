<?php 

$numbersArray = [32, 54, 21, 65, 10, 9, 12, 2];
$newArray = [];



for ($i=0; $i <count($numbersArray); $i++){
	if ($numbersArray[$i] > 20) {
		$newArray[] = $numbersArray[$i];

		array_push($newArray,$numbersArray[$i]);
	}
}
var_dump($newArray);
$s = implode("-",$newArray);

//prvata vrednost,po sto da gi razdeli elementite, 
echo $s;
var_dump(explode('-', $s));

?>


<?php



$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.";

$words = explode(' ', $string);
var_dump($words);


$result = [];

foreach ($words as $word) {
	$result[$word] = strlen($word); 
}

var_dump($result);


?>