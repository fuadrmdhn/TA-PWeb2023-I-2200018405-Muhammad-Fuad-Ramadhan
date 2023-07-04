<?php
	$arrTinggiBadan = array("Fuad" => 162, "Rama" => 173, "Adhit" => 167, "Farhan" => 170);
	$arrBeratBadan = array("Fuad" => 68, "Rama" => 77, "Adhit" => 72, "Farhan" => 62);

	echo "Menampilkan Isi Array Asosiatif Dengan FOREACH :<br>";
	echo "Tinggi Badan<br>";
	foreach ($arrTinggiBadan as $nama => $TB) {
    	echo "Tinggi Badan $nama = $TB cm<br>";
	}

	reset($arrBeratBadan);
	echo "<br>Menampilkan Isi Array Asosiatif Dengan WHILE dan LIST :<br>";
	echo "Tinggi Badan<br>";
	while ($element = current($arrBeratBadan)) {
    	$name = key($arrBeratBadan);
    	echo "Tinggi Badan $name = $element kg<br>";
    	next($arrBeratBadan);
	}
?>