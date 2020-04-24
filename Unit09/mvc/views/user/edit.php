<?php 

date_default_timezone_set('Asia/Ho_Chi_Minh');
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>DevMind - Education And Technology Group</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
</head>
<body>
	<div class="container">
		<h3 align="center">DevMind - Education And Technology Group</h3>
		<h3 align="center">Update User</h3>
		<hr>
		
		<form action="index.php?mod=user&act=update" method="POST" role="form" enctype="multipart/form-data">
			<input type="hidden" name="id" value="<?php echo $user['id']; ?>">
			<div class="form-group">
				<label for="">Name</label>
				<input type="text" class="form-control" id="" placeholder="" name="name" value="<?php echo $user['name'] ?>">
			</div>
			<div class="form-group">
				<label for="">Email</label>
				<input type="text" class="form-control" id="" placeholder="" name="email" value="<?php echo $user['email'] ?>">
			</div>
			<div class="form-group">
				<label for="">New Password</label>
				<input type="Password" class="form-control" id="" placeholder="" name="password" >
			</div>
			<div class="form-group">
                <label for="">Updated at</label>
                <input type="text" class="form-control" id="" placeholder="" name="created_at" value="<?php echo date('Y-m-d  H:i:s') ?>">
            </div>
            <div class="form-group">
				<label for="">Avatar</label>
				<input class="form-control" type="file" name="avatar" id="avatar">
			</div>
			<button  type="submit" class="btn btn-primary">Update</button>
			<!-- <button  type="submit" class="btn btn-primary">Quay lại</button> -->
			<a href="/Unit09/mvc/index.php?mod=user&act=list" class="btn btn-primary">Quay lại</a>

		</form>
	</div>
</body>
</html>