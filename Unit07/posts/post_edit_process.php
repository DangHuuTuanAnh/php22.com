<?php 

// $id = $_POST['id'];
// // echo "<pre>";
// // print_r($_POST);
// // echo "</pre>";
// $data = $_POST;
// require 'connect.php';
// require 'upload.php';

// $query = "UPDATE posts SET title='".$data['title']."',description = '".$data['description']."',thumbnail = '".$target_file."',content = '".$data['content']."',user_id='".$data['user_id']."',category_id='".$data['category_id']."',created_at = '".$data['created_at']."' WHERE  id = $id";

// $status = $conn->query($query);
// setcookie('msg','Cập nhật thành công!',time()+3);
// header('Location:posts.php');
// // print_r($target_file);


$id= $_POST['id'];
require'upload.php';
require'connect.php';
// if (isset($_POST['submit'])) {
// 	$target_dir= "Upload/";
// 	$file_info= $_FILES['thumbnail'];

// 	$target_file = $target_dir.basename($file_info['name']);


// 	if (move_uploaded_file($file_info['tmp_name'],$target_file)) {
// 		// echo "File :" . basename($file_info['name']). " Đã được upload!!!!";

// 	}else{
// 		echo "Upload file khong thanh cong";

// 	}

// }

$data= $_POST;
$query= "UPDATE posts SET title='".$data['title']."', description='".$data['description']."',thumbnail = '".$target_file."', content='".$data['content']."',  user_id='".$data['user_id']."', category_id='".$data['category_id']."' WHERE id='".$id."'";
$status= $conn->query($query);
// echo $query;
// die();
header("Location:posts.php");

 ?>