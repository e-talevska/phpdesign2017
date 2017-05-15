<?php

function generateRandomPass($length){
	$string = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
	$random = str_shuffle($string);
	//return substr($random, 0, $length); //From the begining of the string
	return substr($random, -$length); // From the end of the string
}
?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<p><?php echo generateRandomPass(8);?></p>
<?php 

	$niza = [2, 5, 6, 10, 41, 24, 32, 9, 16, 19];
	$resultNiza = [];
	for($i = 0; $i < count($niza); $i++) {
		if($niza[$i] > 20){
			//$resultNiza[] = $niza[$i];
			array_push($resultNiza, $niza[$i]);
		}
	}
	var_dump($resultNiza);
	//echo implode("-", $resultNiza);
?>

<?php 

    $string = "PHP is a widely-used general-purpose scripting language that is especially suited for Web development.";
    $words = explode(' ', $string);
    $resultArray = [];
    foreach ($words as $word) {
    	$resultArray[$word] = strlen($word);
    }
    var_dump($resultArray);

?>



</body>
</html>