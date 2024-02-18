<?php
$alphabet = range('a','z');
print_r($alphabet);
$string = strtolower("abcdefghijklmnopqrstuvwxyZ");
for($i = 0; $i< strlen($string); $i++) {
    if (in_array($string[$i],$alphabet)){
        echo $string[$i];
        echo "</br>";
        $valueToRemove = array_search($string[$i], $alphabet);
        unset($alphabet[$valueToRemove]);
    }
}
echo "</br>";
print_r($alphabet);
?>