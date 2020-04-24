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
		<a href="index.php?mod=user&act=list" class="btn btn-primary">Quay Lại</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Name</th>
				<th>Avatar</th>
				<th>Emaill</th>
				<th>Created At</th>
			</thead>
			<tr>
				<td><?php echo $user['id']; ?></td>
				<td><?php echo $user['name']; ?></td>
				<td>
					<img style="width: 100px; height: 100px;" src="<?php echo $user['avatar']; ?>">
				</td>
				<td><?php echo $user['email']; ?></td>
				<td><?php echo $user['created_at']; ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
