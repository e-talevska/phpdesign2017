<?php 

function price($w, $p, $tax){
	$price = $p + $p * ($tax / 100);
	return $w * $price;

	echo "You are purchasing $w widget(s) at a cost of \$ $p aech.
	with tax,the total comes to $price <hr/>";
}

$string = 'name@example.com';

function getNameAndDomain($string){
	$domain = substr(strstr($string, '@'), 1);
	$name = strstr($string,'@', true);
	return ['username' => $name, 'domain' => $domain];
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
		$p = 30;
		$w = 119.95;
		$tax = 5;
		 	echo "You are purchasing $w widget(s) at a cost of \$ $p each.
	with tax,the total comes to \$<b>". number_format(price($w, $p, $tax), 2)
 	."</b>"."<hr />";
 	 ?>
 </p>
 <ul>
 <?php 
 	$nameAndDomain = getNameAndDomain($string);
 	foreach($nameAndDomain as $key => $value) {
 		echo "<li><h3>$key: $value</h3></li><hr />";
 	}
  ?>
 </ul>


 <?php 

 function sreateClockLike($string){
	$split = str_split($string, 2);
	// echo "$split[0]:$split[1]:$split[2]<hr/>";
	$result = '';
	foreach ($split as $key => $value) {
		if ($key == count($split) -1) {
			$result .= $value;
		}else{
			$result.= $value.":";
		}
		return $result;
	}

}
echo sreateClockLike('082307');
echo "<hr />";



function generateRandomPass($length){
	$str = "1234567890abcdefghijklmnopqrstuvwxyzABSDIFG";
	$random = str_shuffle($str);
	// return substr($random, 0, $length);//From the begining odf the string
	return substr($random, -$length);//From the end odf the string
}




echo generateRandomPass(20);
echo "<hr />";





$numeric = [2,5,6,10,41,42,32,9,16,19];
$newArr = [];
foreach ($numeric as $key => $value) {
		if ($value > 20) {
			 array_push($newArr, $value);
			
		}
	}

$s = implode("-",$newArr);
var_dump($s);
echo "<hr/>";
var_dump(explode("-", $s));
echo "<hr />";

$sentence = "PHP is a widly-used general-purpose scripting language that is especially suited for Wwb development";
$implode = explode(" ", $sentence);
$rezults = [];
  
	foreach ($implode as $key => $value) {
		$rezults [$value] = strlen($value);
	}

	var_dump($rezults);


 ?>
 </body>
 </html>