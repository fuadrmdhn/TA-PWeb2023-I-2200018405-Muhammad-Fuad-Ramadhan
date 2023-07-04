<?php
	function tambah_string($str){
		$str = $str . ", Indonesia";
		return $str;
	}

	$string = "Bali Terletak di Negara";
	echo "string = $string<br>";
	echo tambah_string($string) . "<br>";
?>