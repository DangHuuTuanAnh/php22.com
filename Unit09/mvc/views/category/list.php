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
		<a href="/Unit09/mvc/index.php?mod=category&act=create" class="btn btn-primary">Add New Category</a>
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
						<a href="index.php?mod=category&act=detail&id=<?php echo $category['id']; ?>" class="btn btn-primary">Detail</a>
						<a href="index.php?mod=category&act=edit&id=<?php echo $category['id']; ?>" class="btn btn-success">Edit</a>
						<a href="index.php?mod=category&act=destroy&id=<?php echo $category['id']; ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>