<?php

	function getProducts($q = FALSE) {
		// <?= e kratenka za php echo 
		//da go otvorime fileot; so handle i fopen pravime konekcija so fileot, mode= ako sakame samo da chitame: read - "r"
		$fileName = 'Products.csv';
		$handle = fopen($fileName, "r");
		

		$header = fgetcsv($handle); // Vo $header e niza kade shto kako elementi gi imame objasnuvanjata za toa shto sekoja kolona sodrzi; 
		// So fgetcsv Go chitam prviot red i go stavam vo promenliva, i kursorot se pomestuva na vtoriot red.

		// while(feof($handle) == FALSE) - pravime negacija;
		// so feof odime do kraj, znachi cita do kraj na dokumentot
		while(feof($handle) == FALSE) {
			$row = (fgetcsv($handle)); 
			if($row === FALSE){ //Ako ima prazen red ignoriraj go, prodolzi.
				continue;
			}
			//If the $q argument has the value different than FALSE and is string which is not empty: 
			if($q !== FALSE && is_string($q) && $q != ''){
				//str pos dava podstring vo string ili vraka false ako ne go najde
				// If the search term is not found in any column skip this row: 
				// if(stripos($row[1], $q) === FALSE &&
				//    stripos($row[2], $q) === FALSE &&
				//    stripos($row[4], $q) === FALSE &&
				//    stripos($row[5], $q) === FALSE) {
				// 	continue;
				// }

				//Ciklus koj ke prebaruva niz site koloni:
				$match = FALSE;
				foreach ($row as $column) {
					if(stripos($column, $q) !== FALSE){
						$match = TRUE; //At least one column matches the search term
						break;
					}
				}

				if($match === FALSE) { //No match found in any column
					continue;
				}

				//Obratno:
				//if(strpos($row[1], $q) !== FALSE) {
				//	htmlot }
			}
			?>

				<div class="col-lg-4 col-sm-4">
					<div class="thumbnail">
						<div class="caption">
							<h3> <a href="product.php?product=<?= $row[0]; ?>"> <?= $row[1]; ?> </a> </h3>
							<p> <?= $row[5]; ?> </p>
						</div>
					</div>
				</div>
			

	<?php
		}

		fclose($handle); //go zatvarame fileot
	}

	function getProduct($productCode) {
		$handle = fopen('Products.csv', "r");

		$match = FALSE;
		// Se dodeka ne dojdeme do krajot na fileot, chitaj red po red i poshto e fgetcsv vraka niza
		while (feof($handle) == FALSE ) {
			$row = fgetcsv($handle);
			if($row[0] == $productCode){
				$match = $row;
				break;
			}
		}

		//Ako nema match ke vrati false, ako najde match go vraka
		fclose($handle);
		return $match;
	}

	function addProduct($product){
		unset($product['add']);
		$handle = fopen('Products.csv', 'a'); //So 'a' pravime append 
		fputcsv($handle, $product);
		fclose($handle);
	}

?>
