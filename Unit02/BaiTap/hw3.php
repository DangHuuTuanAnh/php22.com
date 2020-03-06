<?php 

//Sắp xếp mảng theo thứ tự tăng dần:

$arr = array(1, 4, 2, 6, 9, 100, 8, 5);
sort($arr);

echo "Mảng theo thứ tự tăng dần: ";
for($i = 0; $i < count($arr); $i++) {
	echo $arr[$i] ." ";
	// echo ” ,”;}
}
?>