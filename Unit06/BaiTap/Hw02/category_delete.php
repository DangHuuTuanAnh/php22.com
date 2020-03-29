<?php 

$id = $_GET['id'];

echo $id;

require_once 'connect.php';

$query = "DELETE  FROM categories WHERE id =$id";
$status =$conn->query($query);

header('location:categories.php');
 ?>