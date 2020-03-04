<?php

//Vẽ Hình sau sử dụng vòng lăp:

// for ($i=1; $i <= 8; $i++) { 
// 	echo "<br>";
// 	for ($j=1; $j <= 8; $j++) { 
// 		if ($j >= $i) {
// 			echo "#" . " ";
// 		}else{
// 			echo "&nbsp&nbsp";
// 		}
// 	}
// 	echo " <br>";
// }
for ($i=1; $i <= 8; $i++) {
	echo "<br>";
	for ($j=1; $j <= 8; $j++) {
		if ($j >= $i) {
			echo "#" . " ";
		}else{
			echo "&nbsp&nbsp";
		}
	}
	echo " <br>";
}
?>