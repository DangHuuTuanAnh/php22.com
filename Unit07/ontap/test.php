<?php 

require 'common.php';
if (isset($_POST['name'])) {

	$content = htmlspecialchars($_POST['content']);
	$_POST['content'] = $content;
	$query = update('user',$_POST,1);
	// $query = add('user',$_POST);
	die($query);
}

 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<!-- include libraries(jQuery, bootstrap) -->
<link href="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<!-- include summernote css/js -->
<link href="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.16/dist/summernote.min.js"></script>
</head>
<body>
<form method="POST">
	<input type="text" name="name" placeholder="nhập tên...">
	<br>
	<input type="text" name="email" placeholder="nhập email">
	<br>
	<textarea id="summernote" name="content"></textarea>
	<input type="submit"  value="Submit">
</form>
</body>
<script>
	$(document).ready(function() {
  $('#summernote').summernote();
});
</script>

</html>