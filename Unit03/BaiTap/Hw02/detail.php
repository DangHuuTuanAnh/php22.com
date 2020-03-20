<?php 
session_start();
$id = $_GET['id'];
$std = $_SESSION['student'];
$data =array();
foreach ($std as $key => $value) {
	if($key==$id){
		$data=$value;
	}
}
	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
 	<a href="list.php" class="btn btn-primary">Quay lại</a>
	<div  class="container">
		<form action="" method="POST" role="form" >
			<h3 style="text-align: center;">Thông tin sinh viên</h3>
			<div>
				<?php 
				echo "<b><li>Mã sinh viên:</b> ".$data['id']."</li>" ;
				echo "<b><li>Họ và tên:</b> ".$data['name']."</li>" ;
				echo "<b><li>Số điện thoại:</b> ".$data['phone']."</li>" ;
				echo "<b><li>Email:</b>".$data['email']."</li>" ;
				echo "<b><li>Giới tính:</b> ".$data['gender']."</li>" ;
				echo "<b><li>Địa chỉ:</b> ".$data['address']."</li>" ;
			?>
			</div>
		</form>
	</div>
</body>
</html>