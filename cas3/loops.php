<?php 
	$result=0;

	for ($i=101; $i < 151 ; $i++) { 
		$result += $i * $i;
		
	}
	echo $result;
	echo "<br>";


	exit;
	
	while(true) {
		$i=rand(1,10);
		echo "Rand: $i <br>";
		if($i == 5){
			break;
		}
		


	}

	echo " After while loop";

 ?>