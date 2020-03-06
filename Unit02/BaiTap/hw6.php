<?php
// $chuoi = 'Zent';
$chuoi = 'ZenttneZ';

if (kiem_tra_chuoi_palindrome($chuoi)) {
	echo $chuoi . " là chuỗi Palindrome !";
}else{
	echo $chuoi . " không phải chuỗi Palindrome !";
}

function kiem_tra_chuoi_palindrome($chuoi)   
{  
	if ($chuoi == strrev($chuoi))// đảo chuỗi và so sánh vs chuỗi ban đầu  
		return 1;  
	else  
		return 0;  
}  
?>