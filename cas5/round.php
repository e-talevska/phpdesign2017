<?php 

function calculatePrice($noWidgets, $price, $tax){
	$brutoPrice = $price + $price * ($tax /100);
	return $noWidgets  * $brutoPrice;

}

$string = "name@example.com";
function getNameAndDomain($string){
	$domain = substr(strstr($string, '@'), 1);
	$name = strstr($string, '@', true);
	return [
	'name' => $name,
	'domain' => $domain
	];
}


// echo $domain;

// echo $name;

// zadaca 082307-08:30:07

function createClocklike($string){
	$niza = str_split($string, 2);
	//return $niza[0] . ':' . $niza[1] . ':' . $niza[2];
	// var_dump($niza);
	// vtora varijanta
	$result = '';
	foreach ($niza as $key => $value){
		if($key == count($niza) - 1){
			// last element
			$result .= $value;
		} else {
			$result .= $value . ':';
		}
		// duplo napisano $result .+ $value .':';
	}
	return $result;
}


echo createClocklike('082307');

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p>
	<?php
		$noWidgets = 30;
		$price = 119.95;
		$tax = 5;
		echo "You are purchasing <b>$noWidgets</b> widgets at cost of \$$price each. With tax, the total comes to <b>\$" . number_format(calculatePrice($noWidgets,$price, $tax),2) . "</b>";
?>
	<ul>
	<?php 
		$nameAndDomain = getNameAndDomain($string);
		foreach ($nameAndDomain as $key => $value){
			echo "<li>$key: $value</li>";
		}
	?>
	</ul>

</p>

</body>
</html>