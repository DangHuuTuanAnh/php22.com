<?php 
//Bước 1:
//1.1:Cấu hình
require_once 'connect.php';

//Bước 2:
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
// var_dump($categories);
//Bước 4:Sử dụng dữ liệu:
foreach ($categories as $item) {
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
		<h3 class="text-center">--- CATEGORIES ---</h3>
		<a href="category_add.php" class="btn btn-primary">Add New Category</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Thumbnail</th>
				<th>Description</th>
				<!-- <th>Created At</th> -->
				<th>Action</th>
			</thead>
			<tr>

			
			<?php 
			foreach ($categories as $category) {?>
				<td><?php echo $category['id']; ?></td>
				<td><?php echo $category['name']; ?></td>
				<td>
					<img src="<?php echo $category['thumbnail'] ?>" width="100px" height="100px">
				</td>
				<td><?php echo $category['description']; ?></td>
				<!-- <td><?php echo $category['created_at']; ?></td> -->
				<td>
					<a href="category_detail.php?id=<?php echo $category['id']; ?>" class="btn btn-primary">Detail</a>
					<a href="category_edit.php?id=<?php echo $category['id']; ?>" class="btn btn-success">Edit</a>
					<a href="category_delete.php?id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
				</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>