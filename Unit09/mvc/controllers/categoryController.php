<?php 
require_once'model/category.php';
require_once 'controllers/BaseController.php';
class CategoryController extends BaseController{
	protected $model;

	function __construct(){
		$this->model = new Category();
	}
	public function list(){
		//Lấy dữ liệu:
		$categories = $this->model->all();
		//Gọi đến view:
		$this->view('category/list.php',['categories'=> $categories]);
	}
	public function create(){//create

		$category_model = new Category();
		$categories = $category_model->all();

		$this->view('category/add.php',['categories'=> $categories]);

	}
	public function detail(){
		$id = $_GET['id'];
		$category = $this->model->getById($id);
		$this->view('category/detail.php',['category'=> $category]);


	}
	public function store(){
		$data = $_POST;
		$result = $this->model->add($data);


		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			$this->redirect('index.php?mod=category&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			$this->redirect('index.php?mod=category&act=list');
			
		}
	}
	public function edit(){
		$id = $_GET['id'];
		$category = $this->model->getById($id);
		$this->view('category/edit.php',['category'=> $category]);

	}
	public function update(){
		$data = $_POST;
		$result = $this->model->update($data);
		if ($result) {
			setcookie("success","Cập nhật thành công",time()+3);
			$this->redirect('index.php?mod=category&act=list');
		}else{
			setcookie("fail","Cập nhật thất bại",time()+3);
			$this->redirect('index.php?mod=category&act=list');
		}
	}
	public function destroy(){
		$id = $_GET['id'];
		$result =$this->model->Delete($id);
		if ($result) {
			setcookie("success","Xóa thành công",time()+3);
			$this->redirect('index.php?mod=category&act=list');
		}else{
			setcookie("fail","Xóa thất bại",time()+3);
			$this->redirect('index.php?mod=category&act=list');
		}
	}
}



?>