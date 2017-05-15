<?php 
$elements = [1, 3, 'John', 'Newton', [1,2,3]];

echo $elements[2];

var_dump($elements);

// delete the element with index 3 from $elements
unset($elements[3]);
var_dump($elements);

//delete the whole array
unset($elements);
var_dump($elements);

 ?>