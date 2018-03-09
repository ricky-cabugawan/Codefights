/*
 *adjacentElementProduct
 *https://codefights.com/arcade/intro/level-2/xzKiBHjhoinnpdh6m
 *
 */
 
<?php

function adjacentElementsProduct($inputArray) {
    $max_product = -1000;
    for($i=0;$i < count($inputArray)-1;$i++){
        $newmax_product = $inputArray[$i]*$inputArray[$i+1];
        if($newmax_product > $max_product){
            $max_product = $newmax_product;
        }
    }
    return $max_product;
}
