<?php

function getProducts($q = FALSE){
    $fileName = 'Products.csv';
    $handle = fopen($fileName, "r");
        $rows = [];
        
        $header = fgetcsv($handle);
        while(!feof($handle)){
            $row = fgetcsv($handle);
            if($row === FALSE){
                continue;
            }
            if($q !== FALSE && is_string($q) && $q != ''){
//                if(stripos($row[1], $q) === FALSE &&
//                   stripos($row[2], $q) === FALSE &&
//                   stripos($row[4], $q) === FALSE &&
//                   stripos($row[5], $q) === FALSE){
//                    continue;
//                }
                
                $match = FALSE;
                foreach ($row as $column){
                    if(stripos($column, $q) !== FALSE ){
                        $match = TRUE;
                        break;
                    }
                }
                
                if($match === FALSE){
                    continue;
                }
            }
            ?>
            <div class='col-lg-4 col-sm-4'>
                <div class='thumbnail'>
                    <div class='caption'>
                        <h3><a href="product.php?product=<?= $row[0]; ?>"><?= $row[1]; ?></a></h3>
                        <p><?= $row[5]; ?></p>
                    </div>
                </div>
            </div>
<?php
        }
    
    fclose($handle);
}

function getProduct($productCode){
    $handle = fopen('Products.csv', 'r');
    
        $match = FALSE;
        while(feof($handle) == FALSE){
            $row = fgetcsv($handle);
            if($row[0] == $productCode){
                $match = $row;
                break;
            }
        }
        
    fclose($handle);
    
    return $match;
}

function addProduct($product){
    unset($product['add']);
    $handle = fopen('Products.csv', 'a');
    fputcsv($handle, $product);
    fclose($handle);
}

