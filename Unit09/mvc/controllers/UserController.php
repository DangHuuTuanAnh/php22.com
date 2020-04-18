<?php 
require_once'model/user.php';
require_once 'model/helper.php';
class UserController{
	public $model;

	function __construct(){
		$this->user_model = new User();
		$this->upload_user = new Upload();
	}
	public function list(){//index
		//Lấy dữ liệu:
		$users = $this->user_model->all();
		// $users = $this->user_model->upload();
		//Gọi đến view:
		require_once 'views/user/list_user.php';
	}
	public function Click_add(){//create

		$users = $this->user_model->all();

		require_once 'views/user/add_user.php';
	}
	public function Add_Process(){//store
		$data = $_POST;
		$result = $this->user_model->add($data);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=user&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=user&act=list');
		}

	}
	public function Detail(){
		$id = $_GET['id'];
		$user = $this->user_model->getById($id);
		// $user = $this->user_model->getPost($id);
		require_once('views/user/detail_user.php');
	}
	public function Edit_Post(){//edit

		$user = $this->user_model->all();
		$id = $_GET['id'];
		$user = $this->user_model->getById($id);

		require_once 'views/user/edit_user.php';
	}
	public function Edit_Process(){//update
		$data = $_POST;
		$result = $this->user_model->update($data);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=user&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=user&act=list');
		}
	}
	public function Delete_Post(){//destroy
		$id = $_GET['id'];
		$result =$this->user_model->Delete($id);
		if ($result) {
			setcookie("success","Tạo mới thành công",time()+3);
			header('Location:index.php?mod=user&act=list');
		}else{
			setcookie("fail","Tạo mới thất bại",time()+3);
			header('Location:index.php?mod=user&act=list');
		}
	}
}

?>