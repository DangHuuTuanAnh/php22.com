<?php 

require_once 'connect.php';
// Lấy dữ liệu từ form gửi lên, gán vào biến data
$data = $_POST;
    // print_r($data);
require 'upload.php';
// Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO categories(name,thumbnail,slug,description,created_at) VALUES ('".$data['name']."','".$target_file."','".$data['slug']."','".$data['description']."','".$data['created_at']."')";

// Thực thi câu lệnh
$status = $conn->query($query);

    // if ($status) {
    //  echo "Thành công!";
    // }else{
    //  echo "Lỗi";
    // }

header('Location:categories.php');
    // print_r($data['created_at']);
?>