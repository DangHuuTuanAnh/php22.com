<?php 
require_once 'model/Connection.php';
class Model extends Connection{
	protected $table;
	public $connection;
	function __construct(){
		$connect = new Connection();
		$this->connection = $connect->connection;
	}
	public function all(){
		//Câu lệnh truy vấn:
		$query = "SELECT * FROM $this->table" ;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);

		$data =array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;

	}
	public function update($data){
		$query = "UPDATE $this->table SET ";
		foreach ($data as $key => $value) {
			$query .= $key . "='" .$value ."',";
		}
		$query = substr_replace($query,"",-1);
		$query .= " WHERE id = '".$data['id']."'";
		$result = $this->connection->query($query);
		return $result;

	}
	public function Delete($id){
		$query = "DELETE FROM $this->table WHERE id = $id";
		$result = $this->connection->query($query);
		return $result;
	}
	public function getById($id){
		$query = "SELECT * FROM $this->table WHERE id = ".$id;
	//Thực thi câu lệnh:
		$result = $this->connection->query($query);
		$data =$result->fetch_assoc();
		return $data;
	}
	public function add($data){
		
		$target_dir= "./Upload/";
		$file_info= $_FILES['thumbnail'];

		$target_file = $target_dir.basename($file_info['name']);


		if (move_uploaded_file($file_info['tmp_name'],$target_file)) {
		// echo "File :" . basename($file_info['name']). " Đã được upload!!!!";

		}else{
			echo "Upload file khong thanh cong";

		}
		
		$data['thumbnail'] = $target_file;

		$query = "INSERT INTO $this->table (";
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

		return $result;
	}
}

?>