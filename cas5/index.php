<?php

function calculatePrice($noWidgets, $price, $tax) {
	$brutoPrice = $price + $price * ($tax / 100);
	return $noWidgets * $brutoPrice;
}

$string = "name@example.com";

function getNameAndDomain($string) {
	$domain = substr(strstr($string, '@'), 1);
	$name = strstr($string, '@', true);
	return [
		'username' => $name, 
		'domain' => $domain
	];
}

function createClocklike($string) {
	$niza = str_split($string, 2);
	// return $niza[0] . ':' . $niza[1] . ':' . $niza[2];
	$result = '';
	//08:23:34:
	foreach ($niza as $key => $value) {
		if($key == count($niza) - 1) {
			//last element
			$result .= $value;
		} else {
			$result .= $value . ':';	
		}
	}
	return $result;
}
$result = createClocklike('082334');

function generateRandomPass($length) {
	$string = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
	$random = str_shuffle($string);
	// return substr($random, 0, $length); //from the beginning
	return substr($random, -$length); //from the end of the string
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
				$noWidgets = 30;
				$price = 119.95;
				$tax = 5;

				echo "You are purchuasing <b>$noWidgets</b> at cost of \$$price each. With tax, the total comes to <b>\$". number_format( calculatePrice($noWidgets, $price, $tax), 2) . "</b>";
			?>
		</p>
		<ul>
			<?php
				$nameAndDomain = getNameAndDomain($string);
				foreach($nameAndDomain as $key => $value){
					echo "<li>$key: $value</li>";	
				}
			?>
		</ul>
		<p><?php echo $result; ?></p>
		<p><?php echo generateRandomPass(8); ?></p>
		<?php
			$niza = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
			$resultNiza = [];
			for($i = 0; $i < count($niza); $i++) {
				if($niza[$i] > 20) {
					// $resultNiza[] = $niza[$i];
					array_push($resultNiza, $niza[$i]);
				}
			}
			var_dump($resultNiza);
			$s = implode("-", $resultNiza);
			echo $s;
			var_dump(explode('2', $s));

			$string = "PHP is a widely-used general-purpose scripting language that is especially suited for Web development.";
			$words = explode(' ', $string);
			$resultNiza = [];
			foreach($words as $key => $word){
				$resultNiza[$word] = strlen($word); 
			}
			var_dump($resultNiza);


			$info = [
				'name' => 'John',
				'lastName' => 'Doe'
			];
			$info['name'] = "Jane";
			echo $info['name'];
			$info['age'] = 23; 
			$info['year'] = 1800; 

			var_dump($info);
		?>
	</body>
</html>