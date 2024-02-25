<?php

function subArrayDivision ( ) {
    $s = [1,1,1,1,1,1];
    $d = 3;
    $m = 2;
    $meets = 0;
    for ($i=0; $i < count($s); $i++) { 
        $sum = array_sum(array_slice($s,$i,$m));
        if ( $sum == $d ) {
           $meets++; 
        }
    }
    return $meets;
}

echo subArrayDivision();
?>