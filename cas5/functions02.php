<!-- <?php


// function widgetCost($widget,$numbers,){
	
// 	$totalCost = number_format(($widget * $numbers),2);
	
// 	echo "You are purchasing ". $numbers ." widget(s) at a cost of ". $widget." each. With tax, the total comes to ".$totalCost;

// }

// widgetCost(119.95,30);
?> -->

<?php


function calculate($noWidget,$price,$tax){
	
	$brutoPrice = $price + $price * ($tax / 100);
	return $noWidget * $brutoPrice;
}

calculate(119.95,30,5);

//strstr function

$string = "name@example.com";

function getNameAndDomain($string){

	//go zemame tekstot posle @
	$domain = substr(strstr($string, '@'), 1); 


	//go zemame testot pred @
	$name = strstr($string, '@', true);
	return [
		'username' => $name, 
		'domain'=> $domain
		];
}


?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<p>
		<?php 
			$noWidget = 30;
			$price = 119.95;
			$tax = 5;

			echo "You are purchasing <b>$noWidget</b> widget(s) at a cost of <b>\$$price </b> each. With tax, the total comes to <b>\$".number_format( calculate($noWidget, $price, $tax), 2)."</b>";
		?>
	</p>

<ul>
	<?php 
		$nameAndDomain = getNameAndDomain($string);
		
		foreach ($nameAndDomain as $key => $value) {
		 	echo "<li>$key: $value</li>";	
		 }
	?>
</ul>

<?php 
function createClockFormat($string){
	
	$niza = str_split($string, 2);
	//return $niza[0] . ':' . $niza[1]. ':' .$niza[2];
	//var_dump($niza);

	$result = '';
	foreach ($niza as $key => $value) {
		if($key == count($niza)-1){
			//last element
			$result .= $value;
		}else {
		$result .= $value . ':';
	} 
}
	return $result;
	
}
echo createClockFormat('082307');




//vezba 03
$randomLetters = "32842785jkdjfhklsjgslkfd";
$password = str_shuffle($randomLetters); 

echo "Your password is: ". $password . "<br>";
// OR

function generateRandomPass($length){
	$string = "1234567890abcdegfhijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
	$random = str_shuffle($string);

//ako length e vo - ,zema od kraj; -1 e posledniot element,-2 gi zema poslednite 2
	return substr($random, 0, $length); //from the begining
	return substr($random, -$length); //from the end of the string
}
?>	

<p><?php echo generateRandomPass(5); ?></p>






</body>
</html>
