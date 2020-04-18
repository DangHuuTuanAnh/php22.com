<?php 
require_once'model/category.php';
class CategoryController{
	public $model;

	function __construct(){
		$this->model = new Category();
	}
	public function list(){
		//Lấy dữ liệu:
		$categories = $this->model->all();
		//Gọi đến view:
		require_once 'views/category/list.php';
	}
	public function Click_add(){//create
	
		$category_model = new Category();
		$categories = $category_model->all();

		require_once 'views/category/add.php';
	}
	public function detail(){
		$id = $_GET['id'];
		$category = $this->model->getById($id);
		require_once 'views/category/detail.php';

	}
	public function add_process(){
		$data = $_POST;
		$result = $this->model->add($data);

		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=category&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=category&act=list');
		}
	}
	public function edit(){
		$id = $_GET['id'];
		$category = $this->model->getById($id);
		require_once('views/category/edit.php');
	}
	public function update(){
		$data = $_POST;
		$result = $this->model->update($data);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=category&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=category&act=list');
		}
	}
	public function delete(){
		$id = $_GET['id'];
		$result =$this->model->Delete($id);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=category&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=category&act=list');
		}
	}
}



 ?>