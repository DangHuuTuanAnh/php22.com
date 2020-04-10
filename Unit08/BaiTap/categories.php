<?php 

class Category{
	private $name;
	private $slug;
	private $parent_id;
	private $thumbnail;
	private $description;

	function setName($name){
			$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
	function setSlug($slug){
		$this->slug=$slug;
	}
	function getSlug(){
		return $this->slug;
	}
	function setParent_id($parent_id){
		$this->parent_id=$parent_id;
	}
	function getParent_id(){
		return $this->parent_id;
	}
	function setThumbnail($thumbnail){
		$this->thumbnail=$thumbnail;
	}
	function getThumbnail(){
		return $this->thumbnail;
	}
	function setDescription($description){
		$this->description=$description;
	}
	function getDescription(){
		return $this->description;
	}
	function Display(){
		echo "<br>";
		echo "<i>-------Thông tin danh mục------</i>";
		echo "<br><b>Tên danh mục:</b>" .$this->name;
		echo "<br><b>Đường dẫn:</b>" .$this->slug;
		echo "<br><b>Danh mục cha:</b>" .$this->parent_id;
		echo "<br><b>Ảnh hiển thị:</b>" .$this->thumbnail;
		echo "<br><b>Mô tả:</b>" .$this->description;
		echo "<br>";
	}
	
}
$cate1= new Category();
$cate1->setName('Thể thao');
$cate1->setSlug('the-thao');
$cate1->setParent_id('1');
$cate1->setThumbnail('anh.png');
$cate1->setDescription('Chuyên mục thể thao');

echo $cate1->Display();

$cate2= new Category();
$cate2->setName('Kinh tế-Tài chính');
$cate2->setSlug('kinh-te-tai-chinh');
$cate2->setParent_id('1');
$cate2->setThumbnail('anh.png');
$cate2->setDescription('Chuyên mục kinh tế tài chính');

echo $cate2->Display();

$cate3= new Category();
$cate3->setName('Tin trong nước');
$cate3->setSlug('tin-trong-nuoc');
$cate3->setParent_id('1');
$cate3->setThumbnail('anh.png');
$cate3->setDescription('Chuyên mục tin trong nước');

echo $cate3->Display();
 ?>