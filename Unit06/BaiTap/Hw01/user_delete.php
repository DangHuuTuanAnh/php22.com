<?php 
require 'connect.php';

$id = $_GET['id'];

// echo $id;
//Câu lệnh delete:
$query = "DELETE FROM users WHERE id = $id";

//Thực thi câu leenjhL:
$status = $conn->query($query);

header('location:users.php');

 ?>