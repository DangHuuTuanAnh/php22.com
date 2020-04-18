<?php 

class Connection{
	public $servername ='localhost';
	public $username ='root';
	public $pass='';
	public $dbname = 'blogs';
	public $table;
	public $conn;
	function __construct($table=""){
		$this->conn = new mysqli($this->servername,$this->username,$this->pass,$this->dbname);
		mysqli_query($this->conn,"SET NAMES 'UTF8'");

	//Kiểm tra kết nối:
		if ($this->conn->connect_errno) {
			echo "Kết nối không thành công !" .$this->conn->connect_errno;
		}else{
	// echo "Kết nối thành công!";
		}
		$this->table=$table;
	}
}

 ?>