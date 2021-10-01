<?php
	$arr = [1, 2, 3, 4, 5];
	echo miniMaxSum($arr);
	function miniMaxSum($arr) {
    // Write your code here
		$newArray = $arr;
		$restulArray = array();
		foreach ( $arr as $index => $arrvalue  ) {
			unset($newArray[$index]);
			$restulArray[$index] = array_sum(($newArray)).' ';
			$newArray = $arr;
		}
		echo min($restulArray) .' '. max($restulArray);
	}

?>