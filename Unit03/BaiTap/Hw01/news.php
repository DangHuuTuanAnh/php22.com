<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form">
			<legend style="text-align: center;"><h3><b>Thực hành gửi dữ liệu dùng POST</b></h3></legend>
			<h3 style="text-align: center;">Thông tin sinh viên</h3>
			<?php 

			$id = $_POST['id'];
			$name = $_POST['name'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$gioitinh = $_POST['gender'];
			$diachi = $_POST['address'];

			if (isset($_POST['submit'])) {
				echo "<b><li>Mã sinh viên:</b> ".$id."</li>" ;
				echo "<b><li>Họ và tên:</b> ".$name."</li>" ;
				echo "<b><li>Số điện thoại:</b> ".$phone."</li>" ;
				echo "<b><li>Email:</b>".$email."</li>" ;
				echo "<b><li>Giới tính:</b> ".$gioitinh."</li>" ;
				echo "<b><li>Địa chỉ:</b> ".$diachi."</li>" ;
			}
			?>
			
		</form>
	</div>
</body>
</html>