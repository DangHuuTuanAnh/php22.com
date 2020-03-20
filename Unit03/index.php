<?php
session_start(); 
if (isset($_SESSION['login'])) {
	echo "Đây là trang index.Chỉ admin mới đc vào!";
}else{
	header('Location:form.php');
}

 ?>