<?php 

$servername ='localhost';
$username ='root';
$pass='';
$dbname = 'blogs';

//Tạo kết nối csdl:
$conn = new mysqli($servername,$username,$pass,$dbname);
mysqli_query($conn,"SET NAMES 'UTF8'");
//Câu lệnh truy vấn:
$query = "select * from users";
//Thực thi câu lệnh:
$result = $conn->query($query);

//Kiểm tra kết nối:
if ($conn->connect_errno) {
	echo "Kết nối không thành công !" .$conn->connect_errno;
}else{
	// echo "Kết nối thành công!";
}
 ?>