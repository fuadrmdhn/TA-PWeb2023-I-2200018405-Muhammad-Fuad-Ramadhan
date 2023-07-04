<?php
	$life = array('Balita', 'Anak Anak', 'Remaja', 'Dewasa', 'Tua');
	echo "<pre>";
	print_r($life);
	echo "</pre>";
	$mode=current($life);
	echo $mode. "<br>";
	$mode=next($life);
	echo $mode. "<br>";
	$mode=current($life);
	echo $mode. "<br>";
	$mode=prev($life);
	echo $mode. "<br>";
	$mode=end($life);
	echo $mode. "<br>";
	$mode=current($life);
	echo $mode. "<br>";
?>	