<?php
	if (isset($_POST['Proses'])){
		$saran = $_POST['saran'];
		echo "Kritik Atau Saran Anda Adalah : <br>";
		echo "<font color=blue><b>$saran</b></font><br>";
		
	}
?>