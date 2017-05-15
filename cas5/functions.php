<?php 

	function calculatePrice($noWidgets, $price, $tax){
		$brutoPrice = $price + $price * ($tax / 100);
		return $noWidgets * $brutoPrice;
	}

	$string = "name@example.com";

	function getNameAndDomain($string){
	$domain =  substr (strstr($string, '@'),1); //substr - 1 znaci da pocne od prviot string(go skoknavme 0tiot).	
	$name = strstr($string, '@', true); echo "<br />";	
	return [
	'userName' => $name, 
	'domain' => $domain
	];

	}

		//$str = "082307";
		// echo chunk_split($str, 2, ':');
		function createClockLike($str){
			$niza = str_split($str,2);
			return $niza[0] . ':' . $niza[1] . ':' . $niza[2];
			$result = '';
			foreach ($niza as $key => $value) {
				if ($key == count($niza) - 1){
					//last element
					$result .= $value;
				}
				else{
					$result .= $value . ':';
				}
			}
			return $result;
		}
		echo createClockLike('082307');


?>

<!DOCTYPE html>
<html>
	<head>
		<title> Chas 5, functions </title>
	</head>
	<body>
		<p>
			<?php 
				$noWidgets = 30;
				$price = 119.95;
				$tax = 5;
				echo "You are purchuasing <b> $noWidgets </b> at cost of \$$price each. With tax, the total comes to <b> \$" . number_format (calculatePrice($noWidgets, $price, $tax), 2) . "</b>";
			?>
		</p>
		<ul>
		<?php 
			$nameAndDomain = getNameAndDomain($string);
			foreach ($nameAndDomain as $key => $value) {
				echo "<li> $key: $value </li>";
			}

		?>
		</ul>

	</body>
</html>