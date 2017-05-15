<?php

for($i = 10; $i > 0; $i-=2){
	echo $i . "<br>";

}

?>



<?php
$total = 0;
for($i = 101; $i <=150; $i++){
	$total += ($i*$i);
	
}
echo "Sumata na broevite od 101 do 150 e ". $total;

/*Posle ova linija na kod vece nisto ne se izvrsuva*/
exit;

/* while ciklus example */
echo "<br>"."<br>";

while(true) {
	$i = rand(1,10);
	echo "Rand: $i <br>";
	if($i ==5) {
		break;
	}
}
echo "After while loop";
?>