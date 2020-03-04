<?php 

//Vẽ Hình sau sử dụng vòng lăp:

for ($i=1; $i <= 7; $i++) { 
	echo "<br>";
		for ($j=1; $j <= 7 ; $j++) { 
			if ($j > 7 - $i) {
				echo "#" ." ";
			}else{
				echo "&nbsp&nbsp" ." ";
			}
		}
		echo "<br>";
	}
 ?>