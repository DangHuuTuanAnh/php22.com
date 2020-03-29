<?php 

require 'connect.php';
$id =$_GET['id'];

//Câu lệnh hiển thị dữ liệu:
$query = "SELECT * FROM categories WHERE id = $id ";

//Thực thi câu lệnh:
$result = $conn->query($query);

//Trả về 1 bản ghi:
$category = $result->fetch_assoc();

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
		<h3 class="text-center">--- CATEGORIES ---</h3>
		<a href="categories.php" class="btn btn-primary">Quay Lại</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Thumbnail</th>
				<th>Slug</th>
				<th>Description</th>
				<th>Created At</th>
			</thead>
			<tr>
				<td><?php echo $category['id']; ?></td>
				<td><?php echo $category['name']; ?></td>
				<td>
					<img style="width: 100px;height: 100px;" src="<?php echo $category['thumbnail']; ?>">
				</td>
				<td><?php echo $category['slug']; ?></td>
				<td><?php echo $category['description']; ?></td>
				<td><?php echo $category['created_at']; ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
