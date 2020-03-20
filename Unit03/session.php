<?php 

session_start(); //Đăng ký phiên làm việc vs session

$_SESSION['zent_name'] = "Zent-Group";

// echo "<pre>";
// print_r($_SESSION);
// echo "</pre>";

$info = array();

$info['id'] = '12345';
$info['name'] = 'Tuấn Anh';
$info['email'] = 'ta@gmail.com';

// if(isset($_SESSION['zent_name']){  // Kiểm tra sự tồn tại của SESSION trước khi sử dụng
//         echo $_SESSION['zent_name'];
//     }

// $_SESSION['info'] =  $info;
// if(isset($_SESSION['info']){  // Kiểm tra sự tồn tại của SESSION trước khi sử dụng
//         echo "- ID: ".$_SESSION['info']['id'];
//         echo "- NAME: ".$_SESSION['info']['name'];
//         echo "- EMAIL: ".$_SESSION['info']['email'];
//     }

    unset($_SESSION['zent_name']); // Hủy session có tên là zent_name
    session_destroy(); // Xóa toàn bộ session đã lưu.
echo "<pre>";
print_r($_SESSION);
echo "</pre>";
 ?>