<?php 
function findMedian($arr) {
    // Write your code here
    sort($arr);
    $totalElement = count($arr);
    if ($totalElement % 2 == 0) {
        $midIndex1 = $totalElement / 2;
        $midIndex2 = $midIndex1 - 1;
        return ($arr[$midIndex1] + $arr[$midIndex2]) / 2;
    } else {
        $midIndex = floor($totalElement / 2);
        return $arr[$midIndex];
    }
}

$arr = array(0,1,2,4,6,5,3);
//echo findMedian($arr);


function flippingMatrix($matrix) {
    $n = count($matrix) / 2; // assuming a 4x4 matrix, so n is 2

    // The total sum after maximization
    $maxSum = 0;

    // Iterate over the top-left quadrant
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $n; $j++) {
            // Find the maximum value that can be obtained
            // by flipping the rows and columns accordingly
            $maxValue = max(
                $matrix[$i][$j], // current position
                $matrix[$i][2*$n - $j - 1], // horizontal flip
                $matrix[2*$n - $i - 1][$j], // vertical flip
                $matrix[2*$n - $i - 1][2*$n - $j - 1] // diagonal flip
            );

            // Add the maximum value to the sum
            $maxSum += $maxValue;
        }
    }

    return $maxSum;
}

// Define the matrix
$matrix = [
    [112, 42, 83, 119],
    [56, 125, 56, 49],
    [15, 78, 101, 43],
    [62, 98, 114, 108]
];

// Output the maximized sum
echo "Maximized sum: " . flippingMatrix($matrix);

?>