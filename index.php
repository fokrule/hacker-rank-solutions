<?
	$arr = [1,1,0,-1,-1];
	echo plusMinus($arr);

	function plusMinus($arr) {
		$positive = 0;
		$negative = 0;
		$zero = 0;
		$total = count($arr);
	    foreach ( $arr as $singleArr ) {
	    	if ($singleArr > 0) {
	    		$positive++;
	    	}
	    	else if ( $singleArr < 0 ) {
	    		$negative++;
	    	}
	    	else {
	    		$zero++;
	    	}
	    }
	    $postiveFinal = number_format($positive/$total,6);
	    $negativeFinal = number_format($negative/$total,6);
	    $zeroFinal = number_format($zero/$total,6);
	    echo $postiveFinal."\n";
	    echo $negativeFinal."\n";
	    echo $zeroFinal;
	}
?>