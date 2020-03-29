<?php 

$servername ='localhost';
$username = 'root';
$pass = '';
$dbname = 'blogs';

//1.2:Connect
$conn = new mysqli($servername,$username,$pass,$dbname);
mysqli_query($conn,"SET NAMES 'UTF8'");

//1.3:Kiểm tra connect thành công
if ($conn->connect_errno) {
	echo "kết nối không thành công!" .$conn -> $connect_errno;
	exit();
}else{
	// echo "Thành công!";
}
 ?>