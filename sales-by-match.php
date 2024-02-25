<?php
function sockMerchant($n, $ar) {
    sort($ar);
    $pair = 0;
    for ($i=0; $i < $n; $i++) { 
        if ( isset($ar[$i+1]) && ($ar[$i] == $ar[$i+1])) {
            $pair++;
            $i++;
        }
    }
    return $pair;
}

$ar = array(10, 20, 20, 10, 10, 30, 50, 10, 20);
$n = 9;
echo sockMerchant($n,$ar);
?>