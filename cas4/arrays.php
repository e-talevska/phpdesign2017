<?php 

	 $elements = [1, 6, "John", "Hello", [1,2,3]];
	 echo $elements[2];
	 var_dump($elements);
	 
	 //Delete the element with index 3:
	 unset($elements[3]);
	 var_dump($elements);

	 // Za brishenje na cela niza, ili bilo koja promenliva: 
	 //unset($elements);
	 var_dump($elements);
?>