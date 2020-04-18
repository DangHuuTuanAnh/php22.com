<?php

class User{
	public $table;
	public $connection;
	function __construct(){
		
		$servername ='localhost';
		$username ='root';
		$pass='';
		$dbname = 'blogs';

		$conn = new mysqli($servername,$username,$pass,$dbname);
		mysqli_query($conn,"SET NAMES 'UTF8'");

	//Kiểm tra kết nối:
		if ($conn->connect_errno) {
			echo "Kết nối không thành công !" .$conn->connect_errno;
		}else{
	// echo "Kết nối thành công!";
		}
		$this->connection=$conn;

	}
	public function all(){
		//Câu lệnh truy vấn:
		$query = "SELECT * FROM users" ;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);

		$users =array();
		while ($row = $result->fetch_assoc()) {
			$users[] = $row;
		}
		return $users;

	}
	public function add($data){
		if (isset($_POST['name'])) {
			$target_dir= "./Upload/";
			$file_info= $_FILES['avatar'];

			$target_file = $target_dir.basename($file_info['name']);


			if (move_uploaded_file($file_info['tmp_name'],$target_file)) {
		// echo "File :" . basename($file_info['name']). " Đã được upload!!!!";

			}else{
				echo "Upload file khong thanh cong";

			}
		}
		$data['avatar'] = $target_file;		

		$query = "INSERT INTO users (";
		foreach ($data as $key => $value) {
			$query .= $key .",";
		}
		$query = substr_replace($query,")",-1);
		$query .=" VALUES (";
		foreach ($data as $key => $value) {
			$query .= "'" . $value . "'" . ",";
		}
		$query = substr_replace($query,")",-1);
		$result =$this->connection->query($query);

		echo "<pre>";
		print_r($query);
		echo "<br>";
		print_r($data);
		echo "</pre>";
		return $result;
	}

	public function update($data){
		$query = "UPDATE users SET ";
		foreach ($data as $key => $value) {
			$query .= $key . "='" .$value ."',";
		}
		$query = substr_replace($query,"",-1);
		$query .= " WHERE id = '".$data['id']."'";
		$result = $this->connection->query($query);
		return $result;
	}
	public function getById($id){
		$query = "SELECT * FROM users WHERE id = ".$id;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);
		$user =$result->fetch_assoc();
		return $user;
	}
	public function Delete($id){
		$query = "DELETE FROM users WHERE id = $id";
		$result = $this->connection->query($query);
		return $result;
	}
	
}

?>