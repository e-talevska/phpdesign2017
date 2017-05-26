<?php
$filename = 'text.txt';
$handler = fopen($filename, 'r');
//$content = fread($handler, filesize($filename)); //read all content
$content = fread($handler, 3);
$content .= fread($handler, 3);

echo "Content: " . $content ."<br />";

$whole_content = file_get_contents($filename);
echo "Content: " . $whole_content ."<br />";

$handler = fopen($filename, 'r');
while(!feof($handler)){
//    $line = str_replace(PHP_EOL, '', fgets($handler));
    $values = fgetcsv($handler);
    var_dump($values);
    
}
fclose($handler);
$handler = fopen($filename, 'a');
fwrite($handler, "Sedc,Php".PHP_EOL);
fclose($handler);

echo file_get_contents($filename);
