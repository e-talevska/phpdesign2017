<?php 

for($i = 10; $i > 0; $i-=2){
	echo $i . "<br>";
}

$total = 0;
for($i = 101; $i <= 150; $i++) {
	$total += $i*$i;
}
echo "Sumata na kvadratite na broevite od 101 do 150 e $total";

echo "<br>";
echo "<br>";

exit;

while(true) {
	$i = rand(1,10);
	echo "Rand: $i <br>";
	if($i == 5) {
		break;
	}
}
echo "After while loop";
?>