<?php 
require 'Model.php';
class Post extends Model{
	var $table ='posts';

	function getById($id){
		return $id;
	}
}

$post = new Post('posts');
echo "<pre>";
print_r($post->getAll());
echo "</pre>";
// echo "Đây là bảng: ".$post->table."\n" ;
// echo "<br>";
// echo "id: ".$post->getAll();
// echo "<br>";
// echo "Insert: ".$post->store();
// echo "<br>";
// echo "Delete: ".$post->delete();
// echo "<br>";
// echo "Update: ".$post->update();
// echo "<br>";

 ?>