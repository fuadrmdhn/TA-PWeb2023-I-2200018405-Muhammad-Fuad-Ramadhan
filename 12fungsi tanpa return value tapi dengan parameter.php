<?php
	function cetakGenap ($awal, $akhir){
		for ($i = $awal; $i <= $akhir; $i++) { 
			if ($i%2==0) {
				echo "$i, ";
			}
		}
	} 

	$begining = 100;
	$end  = 200;
	echo "Bilangan Genap Dari $begining sampai $end, adalah : <br>";
	cetakGenap($begining, $end);
?>