<?php

$fileName = 'text.txt';
$handle = fopen($fileName, 'r');
//$content = fread($handle, filesize($fileName)); //read whole content
$content = fread($handle, 2);
$content .= fread($handle, 2);
fclose($handle);

echo "Content: " . $content . "<br />";

$whole_content = file_get_contents($fileName); //substitute for the line above

echo "Content: " . $whole_content . "<br />";

$handle = fopen($fileName, 'r');
while(!feof($handle)){
//    $line = str_replace(PHP_EOL, '', fgets($handle));
    $values = fgetcsv($handle);
    var_dump($values);
}
fclose($handle);

$handle = fopen($fileName, 'a');
fwrite($handle, "sedc,php".PHP_EOL);
fclose($handle);

echo file_get_contents($fileName);
