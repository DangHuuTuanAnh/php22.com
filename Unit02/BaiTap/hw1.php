<?php 

//Tìm phần tử lớn nhất trong mảng: 

$arr = array(12,20,1,50,100,75);

$max = null;
for ($i=0; $i < count($arr); $i++) { 
	if ($max == null) {
		$max = $arr[$i];
	}else{
		if ($arr[$i] > $max) {
			$max = $arr[$i];
		}
	}
}
echo "Số lớn nhất trong mảng là:" .$max;
?>