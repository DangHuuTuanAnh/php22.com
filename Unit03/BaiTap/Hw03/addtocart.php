<?php

session_start();
require_once 'info_Product.php';
$masp = $_GET['masp'];
$newproduct = array();
foreach ($products as $val) {
	$newproduct[$val['masp']] = $val;
}

echo "<pre>";
// (!isset($_SESSION['giohang']) ||  $_SESSION['giohang'] == null)
if (!isset($_SESSION['giohang']) ||  empty($_SESSION['giohang'])) {
	echo "chưa có sản phẩm nào trong gio";
	print_r($newproduct[$masp]);
	$newproduct[$masp]['sl'] = 1;
	$newproduct[$masp]['thanhtien'] = ($newproduct[$masp]['sl'] * $newproduct[$masp]['dongia']);

	$_SESSION['giohang'][$masp] = $newproduct[$masp];

}else{
	if (array_key_exists($masp, $_SESSION['giohang'])) {
		echo "có tồn tại trong giỏ";
		$_SESSION['giohang'][$masp]['sl'] +=1;
		$_SESSION['giohang'][$masp]['thanhtien'] = ($_SESSION['giohang'][$masp]['sl'] * $_SESSION['giohang'][$masp]['dongia']);
		
	}else{
		$newproduct[$masp]['sl'] = 1;
		$_SESSION['giohang'][$masp] = $newproduct[$masp];
		$_SESSION['giohang'][$masp]['thanhtien'] = ($_SESSION['giohang'][$masp]['sl'] * $_SESSION['giohang'][$masp]['dongia']);
	}
}
print_r($_SESSION['giohang']);
header('Location:listSp.php');

?>