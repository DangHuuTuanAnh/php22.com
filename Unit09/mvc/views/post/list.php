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
		<a href="/Unit09/mvc/index.php?mod=post&act=create" class="btn btn-primary">Add New Posts</a>
		<?php
		if (isset($_COOKIE["success"])) {
			?>
			<div class="alert alert-success" role="alert">
				<strong>Thông báo:</strong>
				<?php
				echo $_COOKIE["success"]; 
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
						<!-- <?php echo $post['thumbnail']; ?> -->
					</td>
					<td>
						<a href="index.php?mod=post&act=detail&id=<?php echo $post['id']; ?>" class="btn btn-primary">Detail</a>
						<a href="index.php?mod=post&act=edit&id=<?php echo $post['id']; ?>" class="btn btn-success">Edit</a>
						<a href="index.php?mod=post&act=destroy&id=<?php echo $post['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>