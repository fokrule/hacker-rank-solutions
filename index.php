<?php

function matchingStrings($data, $dataTobeSearched)
{
    $resultArray = array();
    foreach($dataTobeSearched as $singleData ) {
        $index = count(array_keys($data, $singleData));
        array_push($resultArray, $index);
    }
    return $resultArray;
}
$array1 = ['abcde','sdaklfj','asdjf','na','basdn','sdaklfj','asdjf','na','asdjf','na','basdn','sdaklfj','asdjf'];
$array2 = ['abcde','sdaklfj','asdjf','na','basdn'];
echo matchingStrings($array1, $array2);

?>