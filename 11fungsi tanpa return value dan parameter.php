<?php
	function cetakGenap (){
		for ($i=0; $i <= 200; $i++) { 
			if ($i%2==0) {
				echo "$i, ";
			}
		}
	} 

	cetakGenap();
?>