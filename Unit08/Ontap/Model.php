<?php 
require 'Connection.php';

class Model{
	protected $table;
	private $conn;
	public function __construct(){
		// $this->table = $table;
		$connection = new Connection();
		$this->conn = $connection->conn;
		
	}
	function create($data){
		$query = "INSERT INTO $this->table (";
		foreach ($data as $key => $value) {
			$query .=$key.",";
		}
		$query = substr_replace($query,")",-1);
		$query .=" VALUES (";
		foreach ($data as $key => $value) {
			$query .="'".$value."'".",";
		}
		$query = substr_replace($query,")",-1);
		die($query);
		$result = $this->conn->query($query);
		return $result;
	}
	function update($data,$id){
		$query = "UPDATE $this->table SET ";
		foreach ($data as $key => $value) {
			$query .=$key ." = '" . $value ."', ";
		}
		$query = substr_replace($query, "", -1);
		$query .="WHERE id = $id";
		die($query);
		$result = $this->conn->query($query);
		return $result;
	}
	function delete($id){
		$query = "DELETE FROM $this->table WHERE id = $id";
		
		die($query);
		$result = $this->conn->query($query);
		return $result;
	}
	function getAll(){
		//Câu lệnh truy vấn:
		$query = "SELECT * FROM " .$this->table;
	//Thực thi câu lệnh:
		$result = $this->conn->query($query);

		$data =array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	function getById($id){
		$query = "SELECT * FROM $this->table WHERE id = $id ";
	//Thực thi câu lệnh:
		$result = $this->conn->query($query);
		$data =$result->fetch_assoc();
		return $data;
	}
}

	
?>