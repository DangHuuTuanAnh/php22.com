<?php 

class BaseController{
	public function view($path,$data = []){
		if (!empty($data)) {
			extract($data);
		}
		include('views/'.$path);
	}
	public function redirect($path){
		header('Location: ' .$path);
	}
}

?>