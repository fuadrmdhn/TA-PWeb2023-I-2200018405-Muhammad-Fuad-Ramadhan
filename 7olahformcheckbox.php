<?php
	if (isset($_POST['Pilih'])){
		echo "Hobi yang Anda Pilih :<br>";
		if (isset($_POST['hobi1'])) {
			echo "- " .$_POST['hobi1'] . "<br>";
		}
		if (isset($_POST['hobi2'])) {
			echo "- " .$_POST['hobi2'] . "<br>";
		}
		if (isset($_POST['hobi3'])) {
			echo "- " .$_POST['hobi3'] . "<br>";
		}
		if (isset($_POST['hobi4'])) {
			echo "- " .$_POST['hobi4'] . "<br>";
		}
		if (isset($_POST['hobi5'])) {
			echo "- " .$_POST['hobi5'] . "<br>";
		}
	}
?>