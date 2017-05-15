<?php

	for($i = 10; $i > 0; $i-=2){
		echo $i . '<br />';
	}

 ?>


<?php

	$num = 0;
	for($i = 101; $i < 151; $i++){
		$num += ($i * $i);
	}	
	echo $num;
	echo "<br />";

 ?>


<?php

	while(true){
	$i = rand(1,10);
	echo "Rand: $i <br />";
		if($i == 5){
			break;
		}
		echo $i . "<br />";
	}

	echo "After while loop";

 ?>