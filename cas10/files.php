<?php
$filename = 'text.txt';
$handler = fopen($filename, 'r');
//$content = fread($handler, filesize($filename)); //read whole content
$content = fread($handler, 3);
$content .= fread($handler, 3);
fclose($handler);

echo "Content: " . $content . "<br>";

//substitute for the lines above
$whole_content = file_get_contents($filename);

echo "Content: " . $whole_content . "<br>";

$handler = fopen($filename, 'r');
while(!feof($handler)){
//    $line = str_replace(PHP_EOL, '', fgets($handler));
    $values = fgetcsv($handler);
    var_dump($values);
}
fclose($handler);

$handler = fopen($filename, 'a');
fwrite($handler, "sedc,php".PHP_EOL);
fclose($handler);

echo file_get_contents($filename);