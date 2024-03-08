<?php 

function findZigZagSequence ($dataArray) {
    
    sort($dataArray);
    $middleElement = intval((count($dataArray)-1)/2);
    $firstPart = array_slice($dataArray, 0, $middleElement);
    $secondPart = array_slice($dataArray, $middleElement);
    rsort($secondPart);
    $finalZigZag =  array_merge($firstPart, $secondPart);
    return $finalZigZag;
}
$dataArray =  array(1,2,3,4,5,6,7);
$result = findZigZagSequence($dataArray);
foreach ($result as $data) {
    echo $data .' ';
}
?>