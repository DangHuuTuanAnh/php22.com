<?php

// echo "GET METHOD IN PHP";
// echo "<br> Xin chào" . $_GET['name'];
// if(isset($_GET['class'])){
// echo "<br> Bạn học lớp:" .$_GET['class'];

// }


// echo "<pre>";
// print_r($_GET);
// echo "</pre>";

// if(isset($_GET['course'])){

//     $course = $_GET['course']; // Lấy dữ liệu lưu vào biến

//     echo $course;
// }

// if(isset($_GET['class'])){

//     echo $_GET['class'];  // In trực tiếp dữ liệu

// }
$user = $_GET['user'];
$pass = $_GET['pwd'];
// echo 'Tên đăng nhập: '.$_GET['user'].'<br>';
// echo 'Mật khẩu: '.$_GET['pwd']. '<br>';

if ($user == 'admin' && $pass == '123') {
	echo "Xin chào admin!";
}else{
	echo "Đăng nhập thất bại!";
}
?>