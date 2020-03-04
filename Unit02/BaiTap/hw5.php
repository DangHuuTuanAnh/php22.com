<?php
	$name = "Dương Vũ Văn Quá";
	$name1 = "Lưu Diệc Phi";
	tach_ho_tenDem_ten($name);
	tach_ho_tenDem_ten($name1);

	function tach_ho_tenDem_ten($name) {
		$arr_name = explode(" ",$name);
		
		$i = count($arr_name);
		$ho = $arr_name[0];
		
		$ten = $arr_name[$i - 1];
		unset($arr_name[0]);
		
		unset($arr_name[$i - 1]);
		$dem = implode(" ", $arr_name);

		hien_thi($ho, $dem, $ten);
	}

	function hien_thi($ho, $dem, $ten){
		echo "<br><br>Họ: " . $ho;
		echo "<br>Đệm: " . $dem;
		echo "<br>Tên: " . $ten;
	}
?>