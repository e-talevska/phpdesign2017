<?php 

	$totalPrice = ((30*(119.95+(119.95*0.05))));
	echo (number_format($totalPrice, 2, '.', ','));

	$widPrice = 119.95;
	$tax = (119.95 * 0.05);

	function calculatePrice($numOfWid, $widPrice, $tax)
	{
		return "You are purchasing <b>$numOfWid</b> widgets at cost of \$$widPrice each. With tax, the total comes to <b>" . number_format($numOfWid * ($widPrice + $tax), 2, '.', ',') . "</b>";
	}
	echo "<br>";
	echo calculatePrice(30, $widPrice, $tax);


	echo "<br>";
	echo strpos("Hello", "o", 1);

	echo "<br>";
	$string = "elena@hotmail.com";

	function getNameAndDomain($string)
	{	
		$domain = substr(strstr($string, '@'), 1);
		$name = strstr($string, '@', true);
		return ['name' => $name, 'domain' => $domain];
	}

	$timeFormat = "082307";
	function splitTime($timeFormat)
	{	
		$hour = substr($timeFormat, 0, 2);
		$minute = substr($timeFormat, 2, 2);
		$second = substr($timeFormat, 4, 2);
		return "$hour : $minute : $second";
	}

	function cloclLike($timeFormat)
	{
		$niza = str_split($timeFormat, 2);
		return $niza[0] . ":" . $niza[1] . ":" . $niza[2];
	}
cloclLike($timeFormat);

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
<ol>
 <?php 

 $nameAndDomain = getNameAndDomain($string);
 foreach ($nameAndDomain as $key => $value) {
 	echo "<li>$key: $value</li>";
 }

$printDis = cloclLike($timeFormat);
echo $printDis;
// echo $printDis;

  ?>
 </ol>

 </body>
 </html>