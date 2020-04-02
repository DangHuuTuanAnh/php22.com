<?php 
require 'connect.php';

//USERS
function getUser($conn){
	//Câu lệnh truy vấn:
$query = "select * from users";

//Thực thi câu lệnh truy vấn:
$result = $conn->query($query);

//Tạo 1 bảng chứa dữ liệu:
$users = array();
while ($rows = $result->fetch_assoc()) {
    $users[] = $rows;
}
return $users;

}


//CATEGORY:
function getCategory($conn){
	//2.1:Câu lệnh truy vấn
$query = "SELECT * FROM categories";
//2.2:Thực thi câu lệnh truy vấn:

$result = $conn->query($query);
// var_dump($result);
//Bước 3:
//Tạo 1 bảng chứa dữ liệu:

$categories = array();
while ($row = $result->fetch_assoc()) {
    $categories[] = $row;
}
	return $categories;
}


//POSTS:

function getPost($conn,$id){
	//Câu lệnh hiển thị dữ liệu:
$query = "SELECT * FROM posts WHERE id = $id ";

//Thực thi câu lệnh:
$result = $conn->query($query);

//Trả về 1 bản ghi:
$posts = $result->fetch_assoc();


//USER:

if ($posts['user_id']) {
	//Viết câu lệnh thêm dữ liệu:
	$user_query = "SELECT * FROM users WHERE id = " .$posts['user_id'];
	//Thực thi câu lệnh:
	$user_result = $conn->query($user_query);
	//Trả về 1 bản ghi:
	$user = $user_result->fetch_assoc();
	$posts['user']= $user;
}

//CATEGORY:
if ($posts['category_id']) {
	//Viết câu lệnh thêm dữ liệu:
	$category_query = "SELECT * FROM categories WHERE id = ".$posts['category_id'];
	//Thực thi câu lệnh:
	$category_result = $conn->query($category_query);
	//Trả về 1 bản ghi:
	$category = $category_result->fetch_assoc();
	$posts['category']= $category;
}else{
	echo "NO!";
}
return $posts;
}

 ?>
