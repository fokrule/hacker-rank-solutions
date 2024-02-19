<?php
function calculateData($s) {
    $alphabet = range('a','z');
    $string = strtolower($s);
    for($i = 0; $i< strlen($string); $i++) {
        if (in_array($string[$i],$alphabet)){
            $valueToRemove = array_search($string[$i], $alphabet);
            unset($alphabet[$valueToRemove]);
        }
    }
    if (count($alphabet)) {
        return "not pangram";
    }
    else {
        return "pangram";
    }
}
echo calculateData("We promptly judged antique ivory buckles for the next prize");
?>
