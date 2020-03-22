<?php 
function file_upload($target_dir,$input_name,$max_size, $formats_allowed_array){
	$target_file = $target_dir."/" . basename($_FILES[$input_name]["name"]);
	die($target_file);
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));//Lấy thông tin đuôi file
	$error_arr =array();


		//ĐK 1: Check if file already exists
	if (file_exists($target_file)) {
		die("aaaaaaaaaaaa1");
		$error_arr[] = "Sorry, file already exists.";
		$uploadOk = 0;
		// echo "<pre>";
		// print_r($uploadOk);
		// echo "<pre>";

	}else{
		echo $target_file;
	}
	die("aaaa");

		//ĐK 2: Check file size
	if ($_FILES[$input_name]["size"] > $max_size) {
		$error_arr[] = "Sorry, your file is too large.";
		$uploadOk = 0;
	}
		//ĐK 3: kiểm tra định dạng file Allow certain file formats
	if(!in_array($imageFileType, $formats_allowed_array)) {
		$error_arr[] = "Sorry, only ".implode(array_values($formats_allowed_array),',')." files are allowed.";
		$uploadOk = 0;
	}

		// Check if $uploadOk is set to 0 by an error
	// if ($uploadOk == 0) {
	// 	$error_arr[] = "Sorry, your file was not uploaded.";
	// 	// if everything is ok, try to upload file
	// } else {
	// 	if (move_uploaded_file($_FILES[$input_name]["tmp_name"], $target_file)) {
	// 		return $_FILES[$input_name]["name"];
	// 	} else {
	// 		$error_arr[] = "Sorry, there was an error uploading your file.";
	// 	}
	// }
	// return $error_arr;
	echo "<pre>";
	print_r($error_arr);
	print_r($uploadOk);
	echo "</pre>";
}
if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 
	$uploads = file_upload("Upload","ANH_SP",500000,array('JPG','png'));
	if(gettype($uploads) == "array"){
            print_r($uploads); // Trả về mảng lỗi nếu ko upload được
        }else{
            echo "File name is: " . $uploads; // Trả về tên file nếu upload thành công
        }
    }

if(isset($_POST['submit'])){ // kiểm tra xem button Submit đã được click hay chưa ? 

        $target_dir = "Upload/";  // thư mục chứa file upload

        $info = $_FILES["ANH_SP"];

        $target_file = $target_dir . basename($info["name"]); // link sẽ upload file lên
        
        if (move_uploaded_file($_FILES["ANH_SP"]["tmp_name"], $U)) { // nếu upload file không có lỗi 
        	echo "The file ". basename( $info["name"]). " has been uploaded.";
        } else { // Upload file có lỗi 
        	echo "Sorry, there was an error uploading your file.";
        }
    // [name] => 001-diet.png
    // [type] => image/png
    // [tmp_name] => F:\Xampp\tmp\phpBF0C.tmp
    // [error] => 0
    // [size] => 14244
        echo "<pre>";
        print_r($info);
        echo "</pre>";
    }
    ?>