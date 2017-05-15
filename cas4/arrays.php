<?php 
	$elements = [1, 7, "John", "Hello", [1, 2, 3]];
	echo $elements[2];

	var_dump($elements);

//za brisenje na 1ex. - promenlivi; 2ex. - elementi vo nizata
	unset($elements);
	var_dump($elements);

	unset($elements[3]);
	var_dump($elements);
?>