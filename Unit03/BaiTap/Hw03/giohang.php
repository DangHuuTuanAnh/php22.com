<?php 
date_default_timezone_set('Asia/Ho_Chi_Minh');

session_start();
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
	<title>Thông Tin Giỏ Hàng</title>
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
	<form>
		<table class="table table-bordered">
			<tr>
				<td colspan="6"></td>
				<td><a class="btn btn-primary" href="listSp.php">Tiếp tục mua hàng</a></td>
			</tr>
			<tr>
				<td colspan="7" style="text-align: center;"><b><h3>Thông tin giỏ hàng(Hiện có <?php echo $total; ?> sản phẩm trong giỏ)</h3></b></td>
			</tr>
			<tr  style="background-color: rgba(0,0,0,.25);">
				<td><b>ID</b></td>
				<td><b>Tên Sản Phẩm</b></td>
				<td><b>Số Lượng</b></td>
				<td><b>Đơn Giá</b></td>
				<td><b>Thành Tiền</b></td>
				<td><b>Thời Gian Cập Nhật</b></td>
				<td><b></b></td>
			</tr>
			
			<?php
			$tongtien = 0;
			if (isset($_SESSION['giohang']) && ($_SESSION['giohang'] !=null)) {
				foreach ($_SESSION['giohang'] as $list) {
					
					echo "<tr>";
					echo "<td>" .$list['masp']."</td>";
					echo "<td>" .$list['tensp']."</td>";
					echo "<td>" .$list['sl']."</td>";
					echo "<td>" .number_format($list['dongia'])."</td>";
					echo "<td>" .number_format($list['thanhtien'])." VNĐ"."</td>";
					echo "<td>".date('d/m/Y - H:i:s')."</td>";
					echo "<td><a class='btn btn-danger' href='delete.php?masp=".$list['masp']."'>Xóa khỏi giỏ hàng</a></td>";
					echo "</tr>";

				}

			}
			?>
			<tr>
				<td colspan="4" style="text-align: center;"><b>Tổng tiền:</b></td>
				<td><?php 
				foreach ($_SESSION['giohang'] as $value) {
					$tongtien +=$value['thanhtien'];
				}
				echo number_format($tongtien)." VNĐ";
				?></td>
				<td colspan="2"></td>
			</tr>
		</table>
	</form>
</body>
</html>
<!-- <?php 
echo "<pre>";
print_r($_SESSION['giohang']);
?> -->


