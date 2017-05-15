<?php

	function calculatePrice($numWidget, $price, $tax){
		$brutoPrice = $price + $price * ($tax / 100);
		return $numWidget * $brutoPrice;
	}

	$string = "name@example.com";
	function getNameAndDomain($string){
		$domain = substr(strstr($string, "@"), 1);
		$name = strstr($string, "@", true);
		return [
		'username' => $name,
		'domain' => $domain
		];
	}

	// $simpleString = '082307';
	function splitString($simpleString){
		$split = str_split($simpleString, 2);
		$result = implode(':', $split);
		return $result;

	}

	echo splitString("082307");

	echo "<br />";

	function createClockLike($string){
		$niza = str_split($string, 2);
		// return $niza[0] . ":" . $niza[1] . ":" . $niza[2];
		$result = '';
		foreach ($niza as $key => $value) {
			if($key == count($niza) - 1){
				$result .= $value;
			} else{	
				$result .= $value . ":";
			}
		}

		return $result;

	}

	echo createClockLike("082307");



 ?>

 <!DOCTYPE HTML>
 <html>
	 <head>
	 	<title></title>
	 </head>
	 <body>
	 	<p>
	 		<?php 

	 			$numWidget = 30;
	 			$price = 119.95;
	 			$tax = 5;
	 			echo "You are puchasing <b>$numWidget</b> at cost of <b>\$$price</b> each. With tax, the total comes to <b>\$" . number_format(calculatePrice($numWidget, $price, $tax), 2) . "</b>.";

	 		?>
	 	</p>
	 	<p>
	 		<ul>
		 		<?php

		 			$nameAndDomain = getNameAndDomain($string);
		 			foreach ($nameAndDomain as $key => $value) {
		 				echo "<li>$key: $value</li>";
		 			}

		 		 ?>
	 		 </ul>
	 	</p>
	 </body>
 </html>

<?php 

	echo "<hr />";






	function generateRandomPass(){
		$sampleString = '123456ABCDEFabcdef';
		$shuffleString = str_shuffle($sampleString);
		$random = rand(6, strlen($sampleString));
		$password = substr($shuffleString, 0, $random);
		return $password;
	}

	echo generateRandomPass();

	echo "<br />";

	function generateRandomPass2($lenght){
		$string = '123456ABCDEFabcdef';
		$random = str_shuffle($string);
		// return substr($random, 0, $lenght); // from the start of the string
		return substr($random, - $lenght, $lenght);	//from the end of the string
	}

	echo generateRandomPass2(10);



		$array = [1,4,34,23,5,32,65,89,10];

		$newArray = [];

		// foreach ($array as $key => $value) {
		// 	if($value > 20){
		// 		array_push($newArray, $value);
		// 	}
		// }

		for($i = 0; $i < count($array); $i++){
			if($array[$i] > 20){
				array_push($newArray, $array[$i]);
			}
		}

		var_dump($newArray);

		$s = implode('-', $newArray);
		var_dump(explode('2', $s));

		echo $s;
 ?>	

<?php 



	$string = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.';

	$words = explode(' ', $string);

	$newWords = [];

	foreach ($words as $word) {
		$newWords[$word] = strlen($word); 
	}

	var_dump($newWords);
	
?>