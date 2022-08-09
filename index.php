<?php

function loop($maximumStar) {
    echo "1. Half pyramid:</br>";
    for( $i=1; $i<=$maximumStar; $i++ ){
        $printingData = 1;
        for ( $j=1; $j<=$i; $j++ ){
            echo $printingData . " ";
            $printingData++;
        }
        echo "<br/>";
    }
    echo "<br/> 2. Inverted half pyramid:</br>";
    $n = $maximumStar;
    for ( $i=0;$i<=$n; $i++ ) {
        $printingData = "A";
        for ( $j = $n; $j >= $i; $j-- ) {
            echo $printingData . " ";
            $printingData++;
        }
        echo "</br>";
    }
    
    echo "<br/> 3. Reverse Pyramid:</br>";
    $n = $maximumStar;
    for ( $i=$n;$i>=0; $i-- ) {
        $printingData = "*";
        for ($j=1;$j<=($n-$i);$j++) {
            echo "&nbsp";
        }
        for ( $j = 1; $j <= (($i*2)-1); $j++ ) {
            echo $printingData;
        }
        echo "</br>";
    }
}
$data = 4;
loop($data);
?>