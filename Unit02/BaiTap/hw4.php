<?php
$name = " dAnG hUu tUaN aNh ";

echo chuan_hoa_chuoi($name);

function chuan_hoa_chuoi($name) {
	//Hàm strtolower: chuyển đổi tất cả các ký tự trong chuỗi thành ký tự thường
	$name = strtolower($name);

	//Hàm ucwords: chuyển đổi tất cả các chữ đầu tiên của mỗi từ trong chuỗi thành in hoa
	$name = ucwords($name);
	//Hàm trim: xóa ký tự chỉ định khỏi vị trí đầu và cuối
	$name =trim($name); 
	return $name;
}
?>