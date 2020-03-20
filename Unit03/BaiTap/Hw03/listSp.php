<?php 
session_start();
require_once 'info_Product.php';
// echo "<pre>";
// print_r($_SESSION['giohang']);
// echo "</pre>";
$total = 0;
if (isset($_SESSION['giohang']) && $_SESSION['giohang'] !=null){
	foreach ($_SESSION['giohang'] as $list) {
		$total +=$list['sl'];
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Danh Sách Sản Phẩm</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zent Group</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<center>
		<form style="width: 70%">
			<table class="table table-bordered">
				<tr>
					<td colspan="3" style="text-align: center;">(Hiện có <?php echo $total; ?> sản phẩm trong giỏ hàng)</td>
					<td colspan="1"><a href="giohang.php" class="btn btn-danger">Xem giỏi hàng</a></td>
				</tr>
				<tr>
					<td colspan="4" style="text-align: center;"><h3><b>Danh Sách Sản Phẩm</b></h3></td>
				</tr>
				<tr style="background-color: rgba(0,0,0,.25);">
					<td><b>ID</b></td>
					<td><b>Tên Sản Phẩm</b></td>
					<td><b>Đơn Giá</b></td>
					<td><b></b></td>
				</tr>
				<?php 

				foreach ($products as $product) {?>

					<tr>
						<td><?php echo $product['masp'];?></td>
						<td><?php echo $product['tensp'];?></td>
						<td><?php echo number_format($product['dongia']);?></td>
						<td>
							<a class="btn btn-success" href="addtocart.php?masp=<?=$product['masp']?>">Add to cart</a>
						</td>
					</tr>
				<?php }?>
			</table>

		</form>
	</center>
	
</body>
</html>
