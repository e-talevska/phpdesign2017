<?php 

	$filename = 'text.txt';
	//sekogas koga go otvoras failot, treba da go zatvoras
	$handler = fopen($filename, 'r');
	//dolzinata e vo bytes, promenlivata se naoga vo memorija
	// $content = fread($handler, filesize($filename));//read whole content
	$content = fread($handler, 3);
	$content = fread($handler, 3);

	fclose($handler);

	echo "Content: " . $content ."<br />";

	//go otvara, cita i zacuvuva cel content od failot i go zatvora, zamena za goren kod
	$whole_content = file_get_contents($filename);
	echo "Content: " . $whole_content ."<br />";

	$handler = fopen($filename, 'r');
	//se dodeka ne dojdeme na kraj na file
	while (!feof($handler)) {
		//$line = str_replace(PHP_EOL, "",fgets($handler));
		$values = fgetcsv($handler);
		//fgets($handler);//vraka string kako eden red 
		//PHP_EOL go dava karakterot na kraj na red, go koristime oti e konstantna so funkcionira na razlicni sredini, primer na Linux razlicno zavrsuvaat
		//var_dump($line);
		var_dump($values);
	}

	fclose($handler);

		//za da zapisuva vo fajl mora da go otvorime so w ili a

	$handler = fopen($filename, 'a');

	fwrite($handler, "sedc,php" . PHP_EOL);
	//PHP_EOL go stava vo nov red

	fclose($handler);

	echo file_get_contents($filename);

?>