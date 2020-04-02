<?php 

$id = $_POST['id'];
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$data = $_POST;
require 'connect.php';
require 'upload.php';

$query = "UPDATE posts SET title='".$data['title']."',description = '".$data['description']."',thumbnail = '".$target_file."',content = '".$data['content']."',user_id='".$data['user_id']."',category_id='".$data['category_id']."',created_at = '".$data['created_at']."' WHERE  id = $id";

$status = $conn->query($query);
setcookie('msg','Cập nhật thành công!',time()+3);
header('Location:posts.php');
// print_r($target_file);
 ?>