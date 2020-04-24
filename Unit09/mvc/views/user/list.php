<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Users</title>
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
		<a href="/Unit09/mvc/index.php?mod=user&act=create" class="btn btn-primary">Add New User</a>
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
						<a href="index.php?mod=user&act=detail&id=<?php echo $user['id'] ?>" class="btn btn-primary">Detail</a>
						<a href="index.php?mod=user&act=edit&id=<?php echo $user['id'] ?>" class="btn btn-success">Edit</a>
						<a href="index.php?mod=user&act=destroy&id=<?php echo $user['id'] ?>" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			<?php } ?>
		</table>
	</div>
</body>
</html>