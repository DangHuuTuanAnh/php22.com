
<?php 
//Giải phương trình ax+b=0
$a  = 10;
$b=5;

if ($a==0) {
	if ($b==0) {
		echo "Phương trình vô số nghiệm!";
	}else{
		echo "Phương trình vô nghiệm!";
	}
}else{
	$c = -$b/$a;
	echo "Phương trình có nghiệm x = " .$c;
}

 ?>