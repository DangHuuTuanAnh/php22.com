<?php 

require 'connect.php';

//Câu lệnh truy vấn:
$query = "select * from users";

//Thực thi câu lệnh truy vấn:
$result = $conn->query($query);

//Tạo 1 bảng chứa dữ liệu:
$users = array();
while ($rows = $result->fetch_assoc()) {
	$users[] = $rows;
}

//Sử dụng dữ liệu:
foreach ($users as $item) {
	// echo "<pre>";
	// print_r($item);
	// echo "</pre>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>CATEGORIES</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- Users ---</h3>
		<a href="user_add.php" class="btn btn-primary">Add New User</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Emaill</th>
				<th>Avatar</th>
				<th>Action</th>
			</thead>
			<tr>
				<?php foreach ($users as $user) {?>
					<td><?php echo $user['id']; ?></td>
					<td><?php echo $user['name']; ?></td>
					<td><?php echo $user['email']; ?></td>
					<td>
						<img style="width: 100px; height: 100px;" src="<?php echo $user['avatar']; ?>">
					</td>
					<td>
						<a href="user_detail.php?id=<?php echo $user['id'] ?>" class="btn btn-primary">Detail</a>
						<a href="user_edit.php?id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
						<a href="user_delete.php?id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>