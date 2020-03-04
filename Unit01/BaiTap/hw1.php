<?php

//Giải phương trình bậc 2: ax^2+bx+c=0

$a = 0;
$b = 0;
$c = 0;
if ($a==0) {
	if ($b==0) {
		if ($c==0) {
			echo "Phương trình vô số nghiệm!";
		}else{
			echo "Phương trình vô nghiệm!";
		}
	}else{
		$x = -$c/$b;
		echo "Phương trình có nghiệm x = " .$x;
	}
}else{
	$delta = $b*$b - 4*$a*$c;
	if ($delta<0) {
		echo "Phương trình vô nghiệm!";
	}elseif ($delta>0) {
		$x1 = (-$b+sqrt($delta))/(2*$a);
		$x2 = (-$b-sqrt($delta))/(2*$a);
		echo "Phương trình có 2 nghiệm phân biệt x1 = ". $x1 ." và x2 = " .$x2;
	}else{
		echo "Phương trình có 1 nghiệm kép x = " . $x= -$b/2*$a;
	}
}


?>