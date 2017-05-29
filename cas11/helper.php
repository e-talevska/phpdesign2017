<?php

function getProducts($q = FALSE) {
    $filename = 'Products.csv';
    $handle = fopen($filename, "r");

    $header = fgetcsv($handle); //array 
    while(feof($handle) == FALSE) {
        $row = fgetcsv($handle); 
        if($row === FALSE) { //empty row, no columns
            continue;
        }
//        var_dump($row);
        //if the $q argument has value different than FALSE
        //and it string which is not empty
        if($q !== FALSE && is_string($q) && $q != '') {
            //if the search term is not found in any column
            //skip this row
//            if(stripos($row[1], $q) === FALSE &&
//               stripos($row[2], $q) === FALSE &&
//               stripos($row[4], $q) === FALSE && 
//               stripos($row[5], $q) === FALSE) {
//                continue;
//            }
            
            $match = FALSE;
            foreach ($row as $column) {
                if(stripos($column, $q) !== FALSE) {
                    $match = TRUE; //at least one column matches the search term
                    break;
                }
            }
            
            if($match === FALSE) { //no match found in any column
                continue;
            }
            
//            if(strpos($row[1], $q) !== FALSE) {
//               //htmlot
//            }
        }
        ?>
        
        <div class="col-lg-4 col-sm-4">
            <div class="thumbnail">
                <div class="caption">
                    <h3><a href="product.php?product=<?= $row[0]; ?>"><?= $row[1]; ?></a></h3>
                    <p><?= $row[5]; ?></p>
                </div>
            </div>
        </div>
<?php
    }
    
    fclose($handle);
}


function getProduct($productCode) {
    $handle = fopen('Products.csv', 'r');
    
    $match = FALSE;
    while (feof($handle) == FALSE) {
        $row = fgetcsv($handle);
        if($row[0] == $productCode) {
            $match = $row;
            break;
        }
    }

    fclose($handle);
    
    return $match; //returns FALSE or the required product
}

function addProduct($product) {
    unset($product['add']);
    $handle = fopen('Products.csv', 'a');
    fputcsv($handle, $product);
    fclose($handle);
}