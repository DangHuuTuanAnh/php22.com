<!DOCTYPE html>
<html>
<head>
	<title>Upload Document</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script type="text/javascript" src="jquery.validate.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="" method="POST" role="form" enctype="multipart/form-data">
			<legend style="text-align: center;"><h3><b>Upload Document</b></h3></legend>

			<div class="form-group">
				<label for="">Tên tài liệu</label>
				<input type="text" class="form-control" id="" placeholder="Nhập tên tài liệu" name="id">
			</div>

			<div class="form-group">
				<label for="">Image</label>
				<input class="form-control" type="file" name="upload" id="ANH_SP">
			</div>  
			<button type="submit" name="submit" value="Upload Image" class="btn btn-primary">Upload</button>
		</form>
		<?php 
		if (isset($_POST['submit'])) {
			if ($_FILES['upload']['error'] > 0) {
				echo "<br> Có lỗi trong upload";
			}else{
				move_uploaded_file($_FILES['upload']['tmp_name'],'Upload/'.$_FILES['upload']['name']);
				echo "Upload thành công";
				echo "<pre>";
				print_r($_FILES['upload']);
				echo "</pre>";
				$st ='Upload/'.$_FILES['upload']['name'];	 
				echo "<br><a href='$st'>Download</a>";

			}
		}

		?>
	</div>
</body>
</html>
