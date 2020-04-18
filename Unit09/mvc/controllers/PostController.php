<?php 
require_once'model/post.php';
require_once'model/category.php';
require_once'model/user.php';

class PostController{
	public $model;

	function __construct(){
		$this->post_model = new Post();
	}
	public function list(){//index
		//Lấy dữ liệu:
		$posts = $this->post_model->all();
		//Gọi đến view:
		require_once 'views/post/list.php';
	}
	public function Click_add(){//create
		$user_model = new User();
		$category_model = new Category();

		$posts = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();

		require_once 'views/post/add.php';
	}
	public function Add_Process(){//store
		$data = $_POST;
		$data['content'] = htmlspecialchars($data['content']);
		$result = $this->post_model->add($data);

		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=post&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=post&act=list');
		}

	}
	public function Detail(){
		$id = $_GET['id'];
		$user_model = new User();
		$category_model = new Category();
		$users = $user_model->all();
		$categories = $category_model->all();
		$post = $this->post_model->getById($id);
		$post = $this->post_model->getPost($id);
		require_once('views/post/detail.php');
	}
	public function Edit_Post(){//edit
		$user_model = new User();
		$category_model = new Category();

		$post = $this->post_model->all();
		$users = $user_model->all();
		$categories = $category_model->all();
		$id = $_GET['id'];
		$post = $this->post_model->getById($id);

		require_once 'views/post/edit.php';
	}
	public function Edit_Process(){//update
		$data = $_POST;
		$data['content'] = htmlspecialchars($data['content']);
		$result = $this->post_model->update($data);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=post&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=post&act=list');
		}
	}
	public function Delete_Post(){//destroy
		$id = $_GET['id'];
		// $post = $this->post_model->getById($id);
		$result =$this->post_model->Delete($id);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=post&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=post&act=list');
		}
	}
}

?>