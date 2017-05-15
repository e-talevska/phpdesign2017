<?php

	$total = 0;
	for ($i = 101; $i <=  150; $i++) { 
		$total += ($i * $i);
	}
	echo $total . "<br>";
	echo "<br>";

	while(true){
	$i = rand(1, 10);
	echo "Rand: $i <br>";
		if ($i == 5) {
			break;
		}
	}
	echo "loop ended";

?>