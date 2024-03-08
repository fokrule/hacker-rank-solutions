<!-- This file is for matrix  -->

<?php 

function matrixCreation($rows, $columns) {
    $matrix = [];

    for($i = 0; $i <$rows; $i++) {
        for ($j=0; $j < $columns; $j++) { 
            $matrix[$i][$j] = $i+$j;
        }
    }
    return $matrix;
}

function matrixPrint($matrixData, $rows, $columns) {
    for ($i=0; $i < $rows; $i++) { 
        for ($j=0; $j < $columns; $j++) { 
            echo $matrixData[$i][$j] . " ";
        }
        echo "<br>";
    } 
}
$rows = 2; 
$columns = 2;
$matrixData = matrixCreation($rows, $columns);
matrixPrint($matrixData, $rows, $columns);
?>