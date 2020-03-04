<?php 

// $arr_name = array('Zent Group', 'Be all you can be !');
//In mảng:
//Dùng var_dump hoặc print_r:
// var_dump($arr_name);
// print_r($arr_name);

//In mảng theo định dạng:
/*echo "<pre>";
print_r($arr_name);
echo "</pre>";*/

//Cách 2:

/*$arr_name = array(
	0 => 'Zent',
	1 => 'Tuan anh');
echo "<pre>";
print_r($arr_name);
echo "</pre>";*/

//Cách 3:

// $arr_name = array();

// $arr_name[]  = 'Zent Group';
// $arr_name[]  = 'Zent Group';
// $arr_name[]  = 'Zent Group';

//In mảng theo định dạng:
// echo "<pre>";
// print_r($arr_name);
// echo "</pre>";

//Cách 4:
// $arr_name = array();

// $arr_name[0]  = 'Zent Group';
// $arr_name[1]  = 'Zent Group';
// $arr_name[2]  = 'Zent Group';

// //In theo định dạng:
// echo "<pre>";
// print_r($arr_name);
// echo "</pre>";


//Cách 5:
/*$user = array();

$user['name']  = 'Tuan Anh';
$user['age']  = '23';
$user['year']  = '1997';
$user['adress']  = 'Hà Nội';
$user['school']  = 'KTKTCN';

//In theo định dạng:
echo "<pre>";
print_r($user);
echo "</pre>";*/

//Cách đọc giá trị cho mảng:
/*$user = array();

$user[0]  = 'Tuan Anh';
$user[1]  = '23';
$user[2]  = '1997';*/

//Đọc giá trị của từng phần tử mảng bằng index
/*echo "<br> Phần tử thứ 0 : " .$user[0];
echo "<br> Phần tử thứ 1 : " .$user[1];
echo "<br> Phần tử thứ 2 : " .$user[2];*/

// Đọc giá trị của từng phần tử mảng bằng index
/*foreach ($user as $key => $value) {
	echo "<br> Phần tử thứ " .$key. " : " .$value;
}*/

//Sử dụng hàm count(tên_mảng) để đếm số lượng phần tử mảng:

/*for ($i=0; $i < count($user) ; $i++) { 
	echo "<br> Phần tử thứ " .$key. " : " .$value;
}*/

//MẢNG 2 CHIỀU:


$array_name = array();

$array_name[0][0] = 'zent';
$array_name[0][1] = 'group';
$array_name[1][0] = 'be all you can be';
$array_name[1][1] = '2 years';

//In mảng theo định dạng:
/*echo "<pre>";
print_r($array_name);
echo "</pre>";*/

/*echo "<br> Phần tử thứ 0,0: " .$array_name[0][0];
echo "<br> Phần tử thứ 0,1: " .$array_name[0][1];
echo "<br> Phần tử thứ 1,0: " .$array_name[1][0];
echo "<br> Phần tử thứ 1,1: " .$array_name[1][1];*/

/*foreach ($array_name as $key1 => $value1) {
	echo "--------------<br>";
	foreach ($value1 as $key2 => $value2) {
		echo $value2 . "<br>";
	}
}*/

//MẢNG 2 CHIỀU NÂNG CAO:
/*$info = array();

$info[] = array(

'Id' => '12343534',
'Name' => 'Đặng Tuấn Anh',
'Phone' => '0138448',
'Email' => 'dta@gmail.com',
);
$info[] = array(

'Id' => '9745454',
'Name' => 'Đỗ Tùng Lâm',
'Phone' => '0138448',
'Email' => 'dtl@gmail.com',
)
;
$info[] = array(

'Id' => '12343534',
'Name' => 'Giang Đức Duy',
'Phone' => '0138448',
'Email' => 'gdd@gmail.com',
);

foreach ($info as $key => $student) {
	echo "<br> Thông tin sinh viên:" . ($key+1);
	echo "<br>";
	echo "<br> Mã sv:" . $student['Id'];
	echo "<br> Họ tên:" . $student['Name'];
	echo "<br> Sđt:" . $student['Phone'];
	echo "<br> Email:" . $student['Email'];
	
}*/

//HÀM TRONG PHP:
//VD:Hàm kiểm tra số chẵn lẻ:

$numb = 12;
/*if (kiem_tra_so_chan($numb)) {
	echo "là số chẵn!";
}else{
	echo "là số lẻ!";
}
function kiem_tra_so_chan($numb){
	if ($numb%2==0) {
		return true;
	}else{
		return false;
	}
}*/
/*if (Kiem_tra_so_chan($numb)) {
	# code...
}
function kiem_tra_so_chan($numb){
	if ($numb%2==0) {
		echo "là số chẵn!";
	}else{
		echo "là số lẻ!";
	}
}*/

//TRUYỀN NHIỀU BIẾN VÀO HÀM:
/*echo tinhtong(2,3,4);
function tinhtong($a,$b,$c){
	$sum = $a+$b+$c;
	return 'Tổng là:' .$sum;
}*/

//GÁN GIÁ TRỊ MẶC ĐỊNH CHO BIẾN TRUYỀN VÀO:

/*echo tinhtong(2,3);
function tinhtong($a,$b,$c=0){
	$sum = $a+$b+$c;
	return 'Tổng là:' .$sum;
}*/

//BIẾN TOÀN CỤC VÀ BIẾN CỰC BỘ:

/*$bien_toan_cuc = 12
kiemtra();

function kiemtra(){
	//Biến cục bộ:
	$bien_cuc_bo= 13;

	//Lấy biến toàn cục:
	global $bien_toan_cuc;

	// Lấy số dư biến cục bộ chia cho biến toàn cục và
    // kiểm trả về true nếu số dư = 0, ngược lại trả về false
	if ($bien_cuc_bo% $bien_toan_cuc) {
		return true;
	}else{
		return false;
	}
}*/

//BIẾN TĨNH:

// function kiemtra(){
// 	//biến tĩnh:
// 	static $a =0;
// 	$a++;
// 	echo $a;
// }
// kiemtra();
// kiemtra();

//CÁC HÀM THƯỜNG DÙNG:

//Hàm in_array:

/*$name = array('a','b','c');
var_dump(in_array('c',$name));

var_dump(in_array('d',$name));*/

//Hàm array_key_exists:

/*$info = array(
'Id' => '122434',
'Name' => '122434',
'Phone' => '122434',
'Email' => '122434',);

if (array_key_exists('Id',$info)) {
	# code...
}*/

/*date_default_timezone_set('Asia/Ho_Chi_Minh');
echo date('d/m/Y - H:i:s');*/

include_once 'header.php';
require_once 'header.php';
echo "<h1>Đây là nội dung</h1>";
echo "<h1>Đây là nội dung</h1>";
echo "<h1>Đây là nội dung</h1>";
?>