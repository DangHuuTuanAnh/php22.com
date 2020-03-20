<?php 
session_start();

$id = $_GET['id'];
$name = $_GET['name'];
$phone = $_GET['phone'];
$email = $_GET['email'];
$gioitinh = $_GET['gender'];
$diachi = $_GET['address'];

$student = array(
	'id' => $id,
	'name' => $name,
	'phone' => $phone,
	'email' => $email,
	'gender' => $gioitinh,
	'address' => $diachi,
);


$_SESSION['student'][$id]= $student;
header('Location:list.php');

// session_destroy();
?>