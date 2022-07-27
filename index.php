<?php

function loop($maximumStar) {
    echo "1. Right triangle:</br>";
    for( $i=1; $i<=$maximumStar; $i++ ){
        for ( $j=1; $j<=$i; $j++ ){
            echo "*";
        }
        echo "<br/>";
    }
    echo "2. Pyramid:</br>";
    $n = $maximumStar;
    for ($i = 1; $i <= $n; $i++) {
        for ($j = 1; $j <= $n; $j++) {
            if($j<=($n-$i)){
               echo "&nbsp";
                  
            }else {
                echo "*";
            }     
        }
        
        echo "</br>";
    } 
}
$data = 5;
loop($data);
?>