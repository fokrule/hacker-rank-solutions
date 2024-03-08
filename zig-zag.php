<?php 

function findZigZagSequence ($dataArray) {
    $dataArray =  array(1,2,3,4,5,6,7);
    sort($dataArray);
    $middleElement = intval((count($dataArray)-1)/2);
    $firstPart = array_slice($dataArray, 0, $middleElement);
    $secondPart = array_slice($dataArray, $middleElement);
    rsort($secondPart);
    $finalZigZag =  array_merge($firstPart, $secondPart);
    return $finalZigZag;
}
$result = findZigZagSequence();
foreach ($result as $data) {
    echo $data .' ';
}
?>