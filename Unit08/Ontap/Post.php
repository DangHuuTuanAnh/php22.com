<?php 
require 'Model.php';
class Post extends Model{
	protected $table = 'posts';
}

$post = new Post();
echo "<pre>";
// print_r($post->getAll());
// print_r($post->getById('1'));
// print_r($post->delete('10'));
print_r($post->create('title','description'));
echo "</pre>";
?>