 <?php 
 session_start();
 $documents = array();
 $documents[] = array(
 	'name' => 'Toán rời rạc',
 	'filename' => 'file_name_1.doc',
 );
 $documents[] = array(
 	'name' => 'Cấu trúc dữ liệu và giải thuật',
 	'filename' => 'file_name_2.pdf',
 );

$_SESSION['documents'] = $documents;
 ?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=edge">
 	<title>List Documents</title>
 	<link rel="stylesheet" href="">
 	<!-- Latest compiled and minified CSS & JS -->
 	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 	<script src="//code.jquery.com/jquery.js"></script>
 	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
 </head>
 <body>
 	<div class="container">
 		<h2 align="center">----Documents----</h2>
 		<div class="container">
 			<a class="btn btn-success" href="form_upload.php" title="">Upload Document</a>
 			<form>
 				<table class="table">
 					<thead>
 						<tr>
 							<th>#</th>
 							<th>Tên Tài Liệu</th>
 							<th>Downloads</th>
 							<th>Action</th>
 						</tr>
 					</thead>
 					<tbody>
 						<?php 
 						if (isset($_SESSION['documents'])) {
 							foreach ($_SESSION['documents'] as $key => $dc) {
 								?>
 								<tr>
 									<td><?php echo $key; ?></td>
 									<td><?php echo $dc['name']; ?></td>
 									<td>
 										<a class="btn btn-primary" href="download.php">Download</a>
 									</td>
 									<td>
 										<a class="btn btn-danger" href="remove.php?key=<?php echo $key  ?>">Remove</a>
 									</td>
 								</tr>
 							<?php }
 						}
 						?>
 					</tbody>
 				</table>
 			</form>
 			
 		</div>
 	</div>
 </body>
 </html>
<?php 
// echo "<pre>";
// print_r($_SESSION['documents']);
// echo "</pre>";
  ?>