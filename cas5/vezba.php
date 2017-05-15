<?php 
	
	function generateRandomPass($length){
		$string = "554154545547FFLFFKRFKRFRKGKGKGRdkdkdkkdkdkd";
		$random = str_shuffle($string);
		// return substr($random, 0, $length); //from the begining 
		return substr($random, -$length); //from the end of the string
	}

	$arr = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
	$newArr = []; //mora da se definira nadvor od izminuvanjeto na elementite
		for ($i = 0; $i < count($arr); $i++){
			if($arr[$i] > 20 ){
				//$newArr[] = $arr[$i];
				array_push($newArr, $arr[$i]);
			}
		}
	var_dump($newArr);
	$s = implode("-", $newArr); //da zalepime i na koj nachin
	echo $s;
	var_dump(explode("2", $s)); //razdvojuva 
	echo "<hr>";

	
	$string = "Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
	tempor incididunt ut labore et dolore magna aliqua.";
	$words = explode(" ", $string);
	var_dump($words);
	$resultNiza = [];
	foreach ($words as $word) {
		$resultNiza[$word] = strlen($word); 
	}
	var_dump($resultNiza);

	echo "<hr>"; 

	
	



?>
<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>

	<p> <?php echo generateRandomPass(8) ?> </p>

	</body>
</html>