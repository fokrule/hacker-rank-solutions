<?php

function permutingArray() {
    $k = 10;
    $A = [2,1,3];
    sort($A);
    $B = [7,8,9];
    rsort($B);
    $result = "YES";
    foreach ($A as $index => $a) {
        if (($a + $B[$index]) < $k) {
            $result = "NO";
            break;
        }
    }
    return $result;
}

echo permutingArray();
?>