<?php 

require 'connect.php';

$id = $_POST['id'];

//Lấy dữ liệu từ form gán vào biến $data:

$data = $_POST;

require 'upload.php';

//câu lệnh update:
$query = "UPDATE users SET name = '".$data['name']."', email = '".$data['email']."',password = '".md5($data['password'])."',avatar = '".$target_file."' ,created_at = '".$data['updated_at']."' WHERE id = $id";
//Thực thi câu lệnh:
$status = $conn->query($query);

// if ($status) {
// 	echo "update thành công!";
// }else{
// 	echo "Thất bại!";
// }
header('location:users.php');

// print_r($target_file);
 ?>