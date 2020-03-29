<?php 
// date_default_timezone_set('Asia/Ho_Chi_Minh');

require 'connect.php';
require 'upload.php';
//Lấy dữ liệu từ form gửi lên, gán vào biến data:
$data = $_POST;


//Viết câu lệnh để thêm dữ liệu:

$query = "INSERT INTO users(name,email,password,avatar,created_at) VALUES('".$data['name']."','".$data['email']."','".md5($data['password'])."','".$target_file."','".$data['created_at']."')";

//Thực thi câu lệnh:
$status = $conn->query($query);
// if ($status) {
// 	echo "Thành công!";
// }else{
// 	echo "Lỗi";
// }

// echo "<pre>";
// print_r($target_file);
// echo "</pre>";


header('location:users.php');

?>