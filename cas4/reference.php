<?php 
	
	$a = 1;
	$b = $a; //Ja kopira vrednosta od a vo b
	echo "\$b: " . $b . "<br>";
	$a = 2;
	echo "\$b: " . $b . "<br>";

	$x = 1;
	$y = &$x; //Set alias - Gi stava vo ista memorija
	echo "\$y: " . $y . "<br>";
	$x = 2;
	echo "\$y: " . $y . "<br>";

	unset($y); // vrednosta vo x ke ostane so istata vrednost, samo go brisham aliasot 
	echo "\$x: " . $x . "<br>";

	echo "<br> . <hr>";

	function inc1($x){
		return $x+1;
	}
	$a = 2;
	$a = inc1($a);
	echo "\$a: " . $a . "<br>"; //isprakame vrednost

	//Ist rezultat dobivame i so: 
	function inc(&$x){
		$x++;
	}
	$a = 2;
	inc($a);
	echo "\$a: " . $a . "<br>"; //mora da smestime vo promenliva


	echo "<br> . <hr>";
	function beautify(&$s){ //jOhn DOe
						// john doe
		$s = trim ( ucwords( strtolower($s)) ); //Prvo se povikuva najvnatreshnata funkcija
	}

	$fullName = "  jOhn DOe  ";
	beautify($fullName);
	echo $fullName;
?>