<?php 
	
	// Vezba 1:
	for($i = 10; $i > 0; $i-=2){
		echo $i . "<br>";
	}

	// Vezba 2:
	$total=0; //Neutralno za sobiranje
	for ($x=101; $x<=150; $x++){

		$total += $x*$x;

	}
	echo "Sumata na kvadratite na broevite od 101 do 150 e $total";

	echo "<br>";
	echo "<br>";

	// exit; - za da prekine da se izvrshuva kodot.

	// Vezba 3:
	while(true){
		$i = rand(1,10);
		echo "Rand: $i <br>";
		if($i == 5){
			break;
		}
	}
	echo "After while loop";

	//Indexed Arrays:
	$numbers = [34, 65, 90, 83];
?>