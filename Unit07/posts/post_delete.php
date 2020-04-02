<?php 

$id = $_GET['id'];

require 'connect.php';

$post_delete = "DELETE FROM posts WHERE id = $id";

$result = $conn->query($post_delete);
setcookie('msg','Xóa thành công!',time()+3);
header('Location:posts.php');

 ?>