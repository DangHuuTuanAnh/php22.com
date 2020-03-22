<?php 
session_start();
$msp=$_GET['msp'];

if ($_SESSION['products'][$msp]['SoLuong']>1) {
	$_SESSION['products'][$msp]['SoLuong'] -=1;
}else{
	unset($_SESSION['products'][$msp]);
}
header('location:cart_detail.php');

 ?>