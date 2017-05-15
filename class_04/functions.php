<?php 
 
function zbir(){
	$a = 2;
	$b = 4;
	echo ($a +$b) ."<hr/>";
}

function zbirWithArg($a, $b){
	echo ($a * $b). "<hr/>";
}

zbirWithArg(35,88);
zbirWithArg(356,888);


function fullName($name,$lastname,$yearOfBirth){
	echo ("HEllo! My name is: " . $name ." ". $lastname . ". I'm born in: " .$yearOfBirth . " year");
}


fullName("Pavle", "Atanasov", "1988");


function pecati($text, $tag = 'p'){
	// if($tag == 'p'){
	// 	echo "<p>$text</p>";
	// }
	// else if($tag == 'h2'){
	// 	echo "<h2>$text</h2>";
	// }else{
	// 	echo $text. "<br />";
	// }

	echo "<$tag>$text</$tag>";
}

pecati('Nekoj text default');
pecati('Nekoj text vo h2', 'h2');
pecati('Nekoj text vo h2', 'h1');


function flagFunction($firstName, $lastname, $flag = 0){
	if ($flag == 0){
		echo "$firstName $lastname <hr/>";
	}
	else{
		echo "$lastname $firstName <hr/>";
	}
}

flagFunction('Pavle', 'Atanasov');
flagFunction('Pavle', 'Atanasov', 1);


// function flagFunction($firstName, $lastname, $flag = 0){
// 	$result = '';
// 	if ($flag == 0){
// 			$result = $firstName." ". $lastname ."<br/>";
// 	}
// 	else{
// 		$result = $lastname." ". $firstName ."<br/>";
// 	}
// 	return $result;
// }

// $firstName = 'Joe';
// $lastName = 'Doe';

// $fullName = info($firstName,$lastname);
// echo "<h3>$fullName</h3>";

function plostina($a, $b){
	return $a*$b;
}

$P = plostina(5,6);
echo $P.'<hr/>';
echo plostina($P, $P)."<hr/>";
echo plostina(plostina(2,5),plostina(12,18))."<hr/>";


function celToFar($C){
	global $P;//From Main Program
	return ($C*1.8)+32;
}

echo celToFar(30).'<hr/>';

function farToCel($F){
	return (5/9)*($F-32);
}

echo farToCel(celToFar(30));


?>