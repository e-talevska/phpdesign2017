<?php

	// for($i = 100; $i > 0; $i-=10){
	// 	echo $i . "<br />";
	// }

	// //sobiranje na kvadrati na broevi
	// $numSq = 0;
	// for($num = 101; $num <= 150; $num++){
	// 	$numSq += $num * $num;
	// }
	// echo "Suma na broevi od 101 do 150 e $numSq .<br />";

	//exit;
	//while break;
	
	// while(true){
	// 	$i = rand(1, 10);
	// 	if($i == 5){
	// 		break;
	// 	}
	// 	echo "<br/> $i Not five yet. ";
	// };

	//continue 

	//arrays    0  1  2  3  4
	// $numbers = [1, 3, 9];
	// echo "<br />array value " . $numbers[1];

	// $numbers[] = 11; //ako e izostaven elementot znachi na kraj od niza dodaj nov element.
	// array_push($numbers, 13, 15, 17);// ovozmozuva da dodades poveke elemnti na kraj od niza

	// //vo golemi zagradi {} stavi promenlivi koi gi pecatis kako string
	// for($i = 0; $i < count($numbers); $i++){
	// 	echo "<br /> With for print array {$numbers[$i]}.";
	// }

	// foreach($numbers as $numbers){
	// 	echo "<br /> With foreach print array $numbers.";
	// }

	//asocijativni nizi - ovde array_push ne mozeme da koristime
	$arr = [
		'name' => 'Marija',
		'last_name' => 'Shakleva',
		'age' => 22
	];

	echo "<h4>My name is {$arr['name']}, my last name is {$arr['last_name']}, my age is {$arr['age']}.</h4>";

	$arr['last_name'] = "Sh";
	//odavanje nov element
	$arr['birth_year'] = 1995;




	//foreach, prvo se pisuva nizata a posle proemnliva so moze bilo kako sakas d aja krstis za vrednosti od niza da zemes
	// foreach($arr as $arr){
	// 	echo "<br /> $arr";
	// };
	// !!!!!za zemanje key, moze bilo kako da se vikaat foreach($arr as $key => $value)
	
	//gledanje na celiot kontext od nizi bez razlika kakva niza imame, custom funkcija, se koristi za debuggiranje
	echo "<pre>";
	print_r($arr);
	echo "</pre>";

	// vardump pecati sodrzina, tipot i doplnitelni informacii za bilo koja promenliva, bez razlika na nizi i sl., samo za developiranje, debug

	var_dump($arr);


	//brisenje na element od niza
	$element = [1, 6, "John", "Hello", [4, 6, 8, 11, 0]];
	echo $element[2];
	var_dump($element);

	//brisenje na elementot
	unset($element[3]);
	var_dump($element);

	unset($element);
	var_dump($element);

	
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>Loops and other stuff</title>
</head>
<body>
	<p><?php echo "My name is {$arr['name']}, my last name is {$arr['last_name']}, my age is {$arr['age']} and my year of birth is {$arr['birth_year']}."; ?></p>
	<table border="1px">
		<tbody>
				<tr>
					<td><b>Descripton</b></td>
					<td><b>Value</b></td>
				</tr>
				<?php foreach($arr as $key => $value){
				echo "<tr><td>$key </td><td>$value</td></tr>";
				}; 
				//multidimensional arrays
				//indeksna vo asocijativna niza
				$arr['subjects'] = ["UI/UX", "JS", "C++"];

				echo "<h3>" . $arr['subjects'][1] . "<br ?></h3>";
				?>

				<tr>
					<td><b>Descripton</b></td>
					<td><b>Value</b></td>
				</tr>
				<?php foreach($arr as $key => $value){
				echo "<tr><td>$key </td>";
					if($key == 'subjects'){
						var_dump($value);
							echo "<td><ul>";
							foreach ($value as $sub){
								echo "<li>$sub</li>";
							};			
							echo "</td></ul>";			
					}else{
						echo "<td>$value</td>";
					}
					echo "</tr>";
				} ?>
				<br />
				<tr>
					<td><b>Code</b></td>
					<td><b>Description</b></td>
					<td><b>Price</b></td>
				</tr>

				<?php 
				//multidimensional arrays, indeksna vo asocijativna
				//indeksna niza , ne mora klucevi,
				$products = [
					["TIR" , "TIRES", 100],
					["OIL" , "Oil", 10],
					["SPK" , "Spar Plugs", 4]
				];

				foreach($products as $value){
						//var_dump($value);
						echo "<tr>";
						foreach($value as $val){
							echo "<td>$val</td>";
						}
						echo "</tr>";
					}

				 ?>


				
				<?php 
					//asocijativna vo asocijativna niza, vgnezduvanje

					// $arr['subjects02'] = [

					// "UI/UX02" => 3, 
					// "JS02" => 5,
					// "C++02" => 7

					// ];

					// foreach($arr as $key => $value){
					// echo "<tr><td>$key </td>";
					// if($key == 'subjects02'){
					// 		echo "<td><ul>";
					// 		foreach ($value as $keysub => $mark){
					// 			echo "<li>$keysub : $mark</li>";
					// 		};			
					// 		echo "</td></ul>";			
					// }else{
					// 	echo "<td>$value</td>";
					// }
					// echo "</tr>";

				 ?>

		</tbody>
	</table>
</body>
</html>