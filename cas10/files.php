<?php
//go koristime za citanje na del po del od filo-t
	$filename = 'text.txt';

//go otvarame file-ot
	$handler = fopen($filename, 'r');

//go citame file-ot (brojkata e kolku byte-i (karakteri) da procitame)
//$content = fread($handler, filesize($filename)); //filesize ja cita cela sodrzina 

	$content = fread($handler,3); //ke procita i go pomestuva kursorot 
	$content .= fread($handler,3);//gi lepi na prethodnoto narednite 3 karakteri,kursorot ni e posle 3titot karakter
	
//go zatvarame file-ot
	fclose($handler);

echo "Content: ". $content. "<br>";

//site 3 funkcii gi vrsi zaedno,go cita celiot file naednas
$whole_content = file_get_contents($filename);
echo "Content: ". $whole_content. "<br>";




$handler = fopen($filename, 'r');

while (!feof($handler)) {
	
	//$line = str_replace(PHP_EOL, '', fgets($handler));
	$values = fgetcsv($handler);
	var_dump($values);
}


fclose($handler);

$handler = fopen($filename, 'a');
fwrite($handler, "sedc,php".PHP_EOL);
fclose($handler);

echo file_get_contents($filename);
?>