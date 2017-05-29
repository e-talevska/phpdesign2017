<?php 
	//<?= znaci php echo 
	//ako metod e get vo forma , vrednostite se isprakat do server preku url kako kluc=vrednost
	function getProducts($query = false){
		$filename = 'products.csv';
		//vospostavuvame konekcija i ja stavame vo promenliva
		$handle = fopen($filename, 'r');
		//site redovi vo edna multidimenzionalna niza
		$rows = [];
		//nizata sto gi cita naslovite, procitan e prv red, krusorot e na kraj od prv red
		$header =  fgetcsv($handle);
		//kazuva vo koj moment sme dosle do kraj na file, vraka true koga doagame na krajot na file, while se izvrsuva dodeka ne dojdeme do krajot na fileot, trae dodeka vrednosta e false
		//kursorot e na pocetok na 2 red
		while (!feof($handle)) {			
			$row = fgetcsv($handle);
			//preskokni go redot sto ima prazen red, eneteri i sl.
			if($row === false){
				continue;
			}
			//samo ako ima zadadeno vrednost na q, dalie  razlicno od false i e string
			if($query !== false && is_string($query) && $query !== ''){
				//preveruvame dali vo daden string moze da najdeme potstring, strpos moze da vrati 0 i zatoa treba so ovoj operator === da provereme dali voopsto go ima i da bide bukvalno isto i ako ova query go nema vo niedna kolona go skokame i go pecatime dole vo html samo tamu kade sto go ima 
				//proveruvame dali stringot go ima vo polinja citaj vrednosti so tekst
				// if(stripos($row[1], $query) === false &&
				// 	stripos($row[2], $query) === false &&
				// 	stripos($row[4], $query) === false &&
				// 	stripos($row[5], $query) === false){
				// 	continue;
				// }
					//citam nesto, go mestam kursorot, pravam proverka i ako ne se sodrzi odi na naredna iteracija/red

				//prebaruvame dali stringot go ima vo site koloni

				$match = false;
				foreach ($row as $column) {
					if(stripos($column, $query) != false ){
						$match = true;
						break;
						//sum nasla barem edna kolona so match na queryto
					}
				}
				//ako match ostane false, ne najdov match vo foreach
				if($match === false){
					continue;
				}
				
			}    
?>      
				<div class="col-lg-4 col-sm-4">
					<div class="thumbnail">
						<div class="caption">
							<h3><a href="product.php?product=<?= $row[0] ?>"><?= $row[1]; ?></a></h3>
							<p><?= $row[5]; ?></p>
						</div>
					</div>
				</div>
<?php
		}

		fclose($handle);

	}


	function getProduct($productCode){

		$handle = fopen('products.csv', 'r');
		$match = false;
		while (!feof($handle)) {
			$row = fgetcsv($handle);
			if($row[0] == $productCode){
				$match = $row;
				break;
				//so break izleguvas od while, no vo row se zacuvuva vrednosta od productCode
			}

		}

		fclose($handle);

		return $match;
		//returns false or the required product

	}

	function addProduct($product){
		unset($product['add']);
		//var_dump($product);
		$handle = fopen('products.csv', 'a');
		fputcsv($handle, $product);
		fclose($handle);

	}

?>