<?php 

// Tính tổng S = 1 /1! + 2 /2! + ....+ n / n!

$n = 10;
$gt = 1;
$tong = 0;
for ($i= 1; $i <= $n  ; $i++) { 
	$gt *= $i;
	$tong += ($i / $gt);
	
}
echo "Tổng S= " .$tong;
 ?>