
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
		<h3 class="text-center">--- POSTS ---</h3>
		<a href="index.php?mod=post&act=list" class="btn btn-primary">Quay Lại</a>
		<table class="table">
			<thead>
				<th>ID</th>
				<th>Title</th>
				<!-- <th>Thumbnail</th> -->
				<th>Description</th>
				<th>Content</th>
				<th>User Id</th>
				<th>CATEGORY Id</th>
			</thead>
			<tr>
				<td><?php echo $post['id']; ?></td>
				<td><?php echo $post['title']; ?></td>
				<!-- <td>
					<img style="width: 100px;height: 100px;" src="<?php echo $category['thumbnail']; ?>">
				</td> -->
				<td><?php echo $post['description']; ?></td>
				<td><?php echo htmlspecialchars_decode($post['content']); ?></td>
				<td><?php echo $post['user']['name']; ?></td>
				<td><?php echo $post['category']['name']; ?></td>
			</tr>
		</table>
	</div>
</body>
</html>
