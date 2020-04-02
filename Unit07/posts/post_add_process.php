<?php 

require 'connect.php';
require 'upload.php';
require 'common.php';
// Lấy dữ liệu từ form gửi lên, gán vào biến data

$data = $_POST;
$_POST['content'] = htmlspecialchars($_POST['content']);


// print_r($content);

// require 'upload.php';
// Viết câu lệnh để thêm dữ liệu
$query = "INSERT INTO posts(title,description,thumbnail,content,user_id,category_id,created_at) VALUES ('".$data['title']."','".$data['description']."','".$target_file."','".$_POST['content']."','".$data['user_id']."','".$data['category_id']."','".$data['created_at']."')";

// $query1 = add('posts',$_POST);
// Thực thi câu lệnh
$status = $conn->query($query);



// if ($status) {
// 	echo "Thành công!";
// }else{
// 	echo "Lỗi";
// }
// echo "<pre>";
// print_r($_POST['content']);
// // print_r($content);
// print_r($query);
// echo "<br>";
// print_r($query1);
// echo "</pre>";
setcookie('msg','Thêm thành công!',time()+3);
header('Location:posts.php');
?>