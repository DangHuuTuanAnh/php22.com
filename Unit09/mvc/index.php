<?php 
$mod = $_GET['mod'];
$act = $_GET['act'];

switch ($mod) {
	case 'category':
	require 'controllers/categoryController.php';
	$controller_obj = new CategoryController();
	switch ($act) {
		case 'list':
		$controller_obj->list();
		break;
		case 'update':
		$controller_obj->update();
		break;
		case 'edit':
		$controller_obj->edit();
		break;
		case 'detail':
		$controller_obj->detail();
		break;
		case 'add':
		$controller_obj->Click_add();
		break;
		case 'add_process':
		$controller_obj->add_process();
		break;
		case 'delete':
		$controller_obj->delete();
		break;

		default:
		echo "Không tồn tại action";
		break;
	} 
	break;
	
	case 'post':
	require 'controllers/PostController.php';
	$controller_obj = new PostController();
	switch ($act) {
		case 'list':
		$controller_obj->list();
		break;
		case 'add':
		$controller_obj->Click_add();
		break;
		case 'add_process':
		$controller_obj->Add_Process();
		break;
		case 'detail':
		$controller_obj->Detail();
		break;
		case 'delete':
		$controller_obj->Delete_Post();
		break;
		case 'edit':
		$controller_obj->Edit_Post();
		break;
		case 'edit_process':
		$controller_obj->Edit_Process();
		break;

		default:
		echo "Không tồn tại action";
		break;
	}
	break;
	case 'user':
	require 'controllers/UserController.php';
	$controller_obj = new UserController();
	switch ($act) {
		case 'list':
		$controller_obj->list();
		break;
		case 'add':
		$controller_obj->Click_add();
		break;
		case 'add_process':
		$controller_obj->Add_Process();
		break;
		case 'detail':
		$controller_obj->Detail();
		break;
		case 'delete':
		$controller_obj->Delete_Post();
		break;
		case 'edit':
		$controller_obj->Edit_Post();
		break;
		case 'edit_process':
		$controller_obj->Edit_Process();
		break;

		default:
		echo "Không tồn tại action";
		break;
	}
	break;
	default:
	echo "Không tồn tại";
	break;
}

?>