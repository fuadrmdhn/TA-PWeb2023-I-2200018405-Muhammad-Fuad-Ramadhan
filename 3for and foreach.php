<?php
	$arrWarna = array("Red", "Yellow", "Green", "Blue", "Purple");

	echo "Menampilkan Isi Array Dengan FOR :<br>";
	for ($i=0; $i < count($arrWarna); $i++) { 
		echo "Warna Pada Array ke-" . $i+1 . " <font color=$arrWarna[$i]>$arrWarna[$i]</font><br>";
	}

	echo "<br>Menampilkan Isi Array Dengan FOREACH :<br>";
	foreach ($arrWarna as $warna) {
		echo "Warna Pada Array : <font color=$warna>" . $warna . "</font><br>";
	}
?>