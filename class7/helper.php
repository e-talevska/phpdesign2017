<?php 

	function getProducts($q = FALSE)
	{
		$filename = 'csv/Products.csv';
		$handle = fopen($filename, "r");

		$header = fgetcsv($handle); //array 
		while (feof($handle) == FALSE) {
			$row = fgetcsv($handle);
			if ($row == FALSE) {
				continue;
			}
			if ($q !== FALSE && is_string($q) && $q != '' ) {
				// if (stripos($row[1], $q) === FALSE &&
				// 	stripos($row[2], $q) === FALSE &&
				// 	stripos($row[3], $q) === FALSE &&
				// 	stripos($row[4], $q) === FALSE &&
				// 	stripos($row[5], $q) === FALSE) {
				// 	continue;
				// }

				$match = FALSE;
				foreach ($row as $column) {
					if(stripos($column, $q) !== FALSE){
						$match = TRUE; //at least one column matches the search term
						break;
					}
				}

				if ($match === FALSE) { //no match found in any column
					continue;
				}
			}
?>

<div class="col-lg-4">
	<div class="thumbnail">
		<div class="caption">
			<a href="product.php?product=<?= $row[0] ?>"><h3><?= $row[1]; ?></h3></a>
			<p><?= $row[5];  ?></p>
		</div>
	</div>
</div>

<?php
		}

		fclose($handle);
	}

	function getProduct($productCode){

		$handle = fopen('csv/Products.csv', 'r');
		$match = FALSE;
		while (feof($handle) == FALSE) {
			$row = fgetcsv($handle);
			if ($row[0] == $productCode) {
				$match = $row;
				break;
			}
		}
		return $match; //return false or the required product

		fclose($handle);
	}

	function addProduct($product)
	{
		unset($product['add']);
		$handle = fopen('csv/Products.csv', 'a');
		fputcsv($handle, $product);

		fclose($handle);
	}
 ?>