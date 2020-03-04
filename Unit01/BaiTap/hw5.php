<?php 

//In ra tổng của 10 số chẵn đầu tiên:
$Tong =0;
for ($i=0; $i < 20 ; $i++) { 
	if ($i%2==0) {
		$Tong +=$i;
	}
}
echo "Tổng của 10 số chẵn đầu tiên là: " .$Tong;

 ?>