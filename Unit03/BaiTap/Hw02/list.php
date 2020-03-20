 <!DOCTYPE html>
 <html>
 <head>
 	<title>Danh sách sinh viên</title>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>Zent Group</title>
 	<!-- Latest compiled and minified CSS -->
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

 	<!-- Optional theme -->
 	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

 	<!-- Latest compiled and minified JavaScript -->
 	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
 </head>
 <body>
 	<a href="add.php" class="btn btn-primary">Thêm mới</a>
 	<h2 style="text-align: center;">Danh Sách Sinh Viên</h2>
 	<table class="table" style="background-color: lavender">
 		<thead>
 			<tr  style="background-color: rgba(0,0,0,.25);">
 				<th>#</th>
 				<th>Mã sinh viên</th>
 				<th>Họ tên</th>
 				<th>Action</th>
 			</tr>
 		</thead>
 		<tbody>
 			<?php
 			session_start(); 
 			$i=0;
 			$students = $_SESSION['student'];
 			foreach ($students as $student){
 				$i++;
 				?>
 				<tr>
 					<td><?php echo $i; ?></td>
 					<td><?php echo $student['id'];?></td>
 					<td><?php echo $student['name'];?></td>
 					<td>
 						<a href="detail.php?id=<?=$student['id']?>" class="btn btn-success">Detail</a>
 						<a href="delete.php?id=<?=$student['id']?>" class="btn btn-danger">Delete</a>
 					</td>
 				</tr>

 			<?php } ?>
 		</tbody>
 	</table>
 </body>
 </html>
