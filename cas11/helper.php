<?php

function getProducts($q = FALSE){
    $filename = 'Products.csv';// stavanje na file vo promenliva
    $handle = fopen($filename, "r"); //vospostavuvanje na konekcija i treba da go otvorime i vo kakov mod mod read r
    //$rows = []; // Site nizi gi stavame vo edna promenliva
    
    $header = fgetcsv($handle); // Ova ni e array kade kako elementi gi imame headerite koja kolona sto sodrzi
    
    while(feof($handle) == FALSE){
        $row = fgetcsv($handle);
        if($row === FALSE){ // empty row
            continue;
        }
        // var_dump($row);
        // if the $q argument has value different than FALSE
        // and it string ehich is not empty
            if($q !== FALSE && is_string($q)&& $q !=''){ // ako imam razlicna vrednost od FALSE medjutoa vrednosta vo q e string sakam da pravam nekoi proverki
                // If the search term is not found in any column
                //Skip this row
                //if(stripos($row[1], $q) === FALSE && 
                //   stripos($row[2], $q) === FALSE &&
                //   stripos($row[4], $q) === FALSE &&
                //   stripos($row[5], $q) === FALSE){
                //    continue;
               // }
               $match = FALSE;
               foreach ($row as $column){ // Proverka na site koloni
                   if(stripos($column, $q) !== FALSE){
                       $match = TRUE; // at least one column matches the search term
                       break;
                       
                   }
               } 
               if($match === False){ // no match found in any column
                   continue;
               }
                // if(strpos($row[1], $q) !== FALSE){
            //}
            }
        ?> <!-- // Ako ne znaeme sto izleguva pravime var_dump() i is ima funkcija fgetcsv($handle -->
        
                    <div class="col-lg-4 col-sm-4">
                        <div class="thumbnail">
                            <div class="caption">
                                <h3><a href="Product.php?product=<?=$row[0]; ?>"><?= $row[1]?></a></h3>
                                 <p><?= $row[5]?></p>
                            </div>
                        </div>
                
                     </div>
            
        <?php
    } // Chitanje na red po red negacija so izvicnik ili == FALSE citanje do kraj i while avtomatski ke zavrsi 
    
    fclose($handle); // zatvoranje na konekcija odnosno zatvornaje na fajlot
}
function getProduct($productCode){
    $handle = fopen('Products.csv', 'r');
    while(feof($handle) == FALSE){
        $row = fgetcsv($handle);
        if($row[0] == $productCode){
            $match = $row;
            break;
        }
    }
    
    fclose($handle);
    
    return $match; // returns FALSE of the required product
}
 function addProduct($product){
     unset($product['add']);
     $handle = fopen('Products.csv', 'a');
     fputcsv($handle, $product);
     fclose($handle);
//     var_dump($product);
 }
