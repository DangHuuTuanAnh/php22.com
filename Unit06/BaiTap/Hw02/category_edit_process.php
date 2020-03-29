<?php 

$id = $_POST['id'];
// echo "<pre>";
// print_r($_POST);
// echo "</pre>";
$data = $_POST;
require_once 'connect.php';
require_once 'upload.php';

$query = "UPDATE categories SET name='".$data['name']."',thumbnail = '".$target_file."',slug = '".$data['slug']."',description='".$data['description']."' WHERE  id = $id";

$status = $conn->query($query);
header('Location:categories.php');
 ?>