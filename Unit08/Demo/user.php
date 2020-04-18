<?php 
require 'Model.php';
class User extends Model{
	var $table ='users';

	
	function getById($id){
		return $id;
	}
}

$user = new User('users');
echo "<pre>";
print_r($user->getAll());
echo "</pre>";
// echo "Đây là bảng: ".$user->table."\n" ;
// echo "id: ".$user->getById(1);
// echo "<br>";
// echo "id: ".$user->getAll();
// echo "<br>";
// echo "Lưu: ".$user->Store();
// echo "<br>";
// echo "Xóa: ".$user->Delete();
// echo "<br>";
// echo "Cập nhật: ".$user->Update();
// echo "<br>";
 ?>