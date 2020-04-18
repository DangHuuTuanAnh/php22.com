<?php 

class Model{
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
	public function getAll(){
		//Câu lệnh truy vấn:
		$query = "select * from " .$this->table;
	//Thực thi câu lệnh:
		$result = $this->conn->query($query);

		$data =array();
		while ($row = $result->fetch_assoc()) {
			$data[] = $row;
		}
		return $data;
	}
	//Lưu việc thêm mới
	function Store(){
		return 'Lưu';
	}
	function Delete(){
		return 'Xóa';
	}
	function Update(){
		return 'Cập nhật';
	}
	
}
// class Person{
// 	private $name;

// 	//Khai báo phương thức run:

// 	function run(){
// 		return 'Đây là hàm run!';
// 	}
// 	function setName($name){
// 		$this->name = $name;
// 	}
// 	function getName(){
// 		return $this->name;
// 	}
// 	function getRunMethod(){
// 		return $this->run();
// 	}

// }

// //Khởi tạo class:

// $person  = new Person();
// //Gọi phương thức name:
// $person->setName('Tuấn Anh');

// echo $person->getName();
// echo "<br>";
// echo $person->getRunMethod();


// class Person{

// 	protected $name;
// }
// class Male extends Person{
// 	function setName($name){
// 		$this->name = $name;
// 	}
// 	function getName(){
// 		return $this->name;
// 	}
// }
// //Khởi tạo lớp person:
// $person  = new Person();

// echo "Public:";
// // $person->name;
// // echo  $male->name;
// $male = new Male();
// //Gọi phương thức name:
// echo "Protected:";
// $male->setName('Tuấn Anh');

// echo $male->getName();

?>
