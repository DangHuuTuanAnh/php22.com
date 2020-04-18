<?php 

require 'Model.php';

class Category extends Model{
	var $table ='categories';

	function getById($id){
		return $id;
	}
}
$category = new Category('categories');
echo "<pre>";
print_r($category->getAll());
echo "</pre>";
// echo "Đây là bảng: ".$category->table."\n" ;
// echo "<br>";
// echo "id: ".$category->getAll();
// echo "<br>";
// echo "Lưu: ".$category->Store();
// echo "<br>";
// echo "Xóa: ".$category->Delete();
// echo "<br>";
// echo "Cập nhật: ".$category->Update();
// echo "<br>";

?>