<?php

function lonelyinteger($data)
{
    foreach($data as $singleData ) {
        $index = count(array_keys($data, $singleData));
        if ($index == 1){
            return $singleData;
        }
    }
}
$array1 = [1,2,3,1,2,3,4];
lonelyinteger($array1);

?>