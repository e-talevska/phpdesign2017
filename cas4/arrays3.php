<?php

	$elements = [1, 10, 'John', 'Hello', [1,2,3]];

	echo $elements[2];
	var_dump($elements);

	// Delete element from array
	unset($elements[3]);
	var_dump($elements);

	unset($elements);
	var_dump($elements);
	
 ?>