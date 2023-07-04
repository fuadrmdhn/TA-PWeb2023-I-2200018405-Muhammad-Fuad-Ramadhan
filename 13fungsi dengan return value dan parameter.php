<?php
	function LPersegi ($sisi){
		return $sisi*$sisi;
	} 

	$s = 5;
	echo "Luas Persegi Dengan panjang sisi $s cm adalah : <br>";
	echo LPersegi($s);
	echo " cm^2";
?>