<?php 
//Bước 1:
//1.1:Cấu hình
require_once 'connect.php';

//Bước 2:
//2.1:Câu lệnh truy vấn
$query = "SELECT * FROM posts";
//2.2:Thực thi câu lệnh truy vấn:

$result = $conn->query($query);
// var_dump($result);
//Bước 3:
//Tạo 1 bảng chứa dữ liệu:

$posts = array();
while ($row = $result->fetch_assoc()) {
	$posts[] = $row;
}
// var_dump($categories);
//Bước 4:Sử dụng dữ liệu:
foreach ($posts as $item) {
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
	<title>POSTS</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 class="text-center">--- Posts ---</h3>
		<a href="post_add.php" class="btn btn-primary">Add New Posts</a>
		<?php
            if (isset($_COOKIE["msg"])) {
                ?>
                <div class="alert alert-success" role="alert">
                    <strong>Thông báo:</strong>
                    <?php
                    echo $_COOKIE["msg"]; 
                    ?>
                </div>
                <?php 
            }
            ?>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<th>Description</th>
				<th>Thumbnail</th>
				<!-- <th>Content</th> -->
				<th>Action</th>
			</thead>
			<tr>

			
			<?php 
			foreach ($posts as $post) {?>
				<td><?php echo $post['id']; ?></td>
				<td style="width: 200px;"><?php echo $post['title']; ?></td>
				<td style="width: 690px;"><?php echo $post['description']; ?></td>
				<td>
					<img src="<?php echo $post['thumbnail']; ?>" width="100px" height="100px">
				</td>
				<td>
					<a href="post_detail.php?id=<?php echo $post['id']; ?>" class="btn btn-primary">Detail</a>
					<a href="post_edit.php?id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
					<a href="post_delete.php?id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
				</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>