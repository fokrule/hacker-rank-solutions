<?php

function flippingBits( $data)
{
    echo ($data ^ 0xFFFFFFFF)."\n";
}
$array1 = 0;
flippingBits($array1);

?>