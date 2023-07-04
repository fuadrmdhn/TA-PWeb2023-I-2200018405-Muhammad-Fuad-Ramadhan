<?php
	$arrNilai = array("Fuad" => 98, "Rama" => 92, "Adhit" => 88, "Farhan" => 90);
	echo "<b>Array Sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	asort($arrNilai);
	reset($arrNilai);
	echo "<b>Array Setelah diurutkan dengan ASORT() :</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	arsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array Setelah diurutkan dengan ARSORT() :</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";	
?>	