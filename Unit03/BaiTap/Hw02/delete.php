<?php
	
	session_start();
	$id=$_GET['id'];
	$std= $_SESSION['student'];
	
	foreach ($std as $key => $value) {
		if($key==$id){
			unset($_SESSION['student'][$id]);
		}
	}
	header('Location:list.php');
	// echo "<pre>";
	// print_r($_SESSION['student']); 
	// echo "</pre>"; 
 ?>