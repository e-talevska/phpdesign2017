<?php 

$elements = [5,6, "John", "Hello", [1,2,3]];

echo $elements[2];
var_dump($elements);

// Delete the element with idex 3 from 
unset($elements[3]);
var_dump($elements);

unset($elements);
var_dump($elements);

 ?>