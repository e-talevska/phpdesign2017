<?php 
$c = 1;
function zbir($a, $b){
		echo ($a + $b) . "<br>";
		
}

zbir(8,4);
zbir(1.68,34.185);
zbir($c,4);


 ?>

 <?php 

 function printName($name, $lastName, $born){
 	echo "My name is: $name $lastName. I was born in $born <br>";
 }

printName("Anja", "Kukovska", 1994);

function paint($color = "red"){
	echo "the color of the room is $color <br>";
}

paint();
paint("blue");



function pecati($text, $tag = 'p') {

	// if($tag == 'p'){
	// 	echo "<p>$text</p>";
	// }else if($tag == 'h2'){
	// 	echo"<h2>$text</h2>";
	// }else{
	// 	echo $text . "<br>";
	// }

	echo "<$tag>$text</$tag>";
}

//pecati vo paragraf
pecati('Nekoj text');
pecati('Haiii','p');
pecati('Hi', 'h2');
pecati('Hello','h4');
pecati('Hello','qwe');

  ?>

  <?php 

  function printMyname($name, $lastName, $flag = 0){
  	$result = '';
  	if($flag === 0){
  		$result = $name . " " . $lastName; //echo "My name is $name $lastName <br>";
  	}else{
  		$result = $lastName . " " . $name;  //echo "My name is $lastName $name <br>";
  	}
  	return $result; //ako nema return vrednosta e null

  }                           

$name = "John";
$lastName = "Doe";
                
$fullName = printMyname($name, $lastName); //"John Doe"

echo "<h3>$fullName</h3>";

function ploshtina($a, $b){

	return $a*$b;

}

$P = ploshtina(4,5);
echo $P;
echo "<br />";
echo ploshtina ($P, $P);
echo "<br />";
echo ploshtina (ploshtina(1,2), ploshtina(3,4));

// printMyname("Anja", "Kukovska", 1);




   ?>


   <?php 

   function celToFar($C){
   	return $C* 1.8 + 32; 
   }

    function farToCel($F){
   	return ($F-32)/1.8; 
   }


$F = celToFar(100);
echo $F;
echo "<br />";

$C = celToFar($F);

echo $C;
echo "<p>Stepeni: " . farToCel($F) . "</p>";

    ?>