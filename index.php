<?php

function diagonalDifference($data) {
    $firstDiagonal = 0;
    $secondDiagonal = 0;
    $n = 3;
    for ($i=0;$i<3;$i++){
        for($j=0;$j<3;$j++){
            if ( $i == $j ) {
                $firstDiagonal += $data[$i][$j];
            }
            if ( $i == $n - $j - 1 ) {
                $secondDiagonal += $data[$i][$j];
            }
        }        
    }
    $result = $firstDiagonal - $secondDiagonal;
    return abs($result);
}
$data = [
    [11,2,4],
    [4,5,6],
    [10,8,-12]
];
diagonalDifference($data);
?>