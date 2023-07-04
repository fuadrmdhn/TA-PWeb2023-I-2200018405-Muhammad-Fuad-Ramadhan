<?php
	$arrNilai = array("Fuad" => 98, "Rama" => 92, "Adhit" => 88, "Farhan" => 90);
	echo "<b>Array Sebelum diurutkan</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	sort($arrNilai);
	reset($arrNilai);
	echo "<b>Array Setelah diurutkan dengan SORT() :</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";

	rsort($arrNilai);
	reset($arrNilai);
	echo "<b>Array Setelah diurutkan dengan RSORT() :</b>";
	echo "<pre>";
	print_r($arrNilai);
	echo "</pre>";	
?>	