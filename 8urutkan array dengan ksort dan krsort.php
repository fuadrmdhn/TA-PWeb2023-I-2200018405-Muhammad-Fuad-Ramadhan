<?php
	$arrNilai = array("Fuad" => 98, "Rama" => 92, "Adhit" => 88, "Farhan" => 90);
	echo "<b>Array Sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	ksort($arrNilai);
	reset($arrNilai);
	echo "<b>Array Setelah diurutkan dengan KSORT() :</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	krsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array Setelah diurutkan dengan KRSORT() :</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";	
?>	