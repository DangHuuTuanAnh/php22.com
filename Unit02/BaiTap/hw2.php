<?php 

//In theo thứ tự ngược lại các phần tử của mảng:
$arr_name=array(1,4,2,6,9,100,4);

//Hàm array_reverse:đảo ngược thứ tự các phần tử trong mảng.
$data=array_reverse($arr_name);
echo "Mảng sau khi đảo ngược: ";
foreach ($data as $key => $value) {
	echo $value ." ";
}
?>