<?php 

//Cấu hình class:
class Oto{
	var $ten;
	var $hangxe;
	var $mau;
	var $so_cho;

	//Method:
	function chay(){
		echo "Xe $this->ten có màu $this->mau dang chay";
	}
	function di($km,$dia_diem){
		echo "Xe $this->ten có màu $this->mau đã chạy $km đến $dia_diem";
	}
}

$van = new Oto();
$audi = new Oto();

$audi->ten ="Audi A8";
$audi->mau ="Xám";

$van->ten ="Van";
$van->mau ="Đen";

//In ra thong tin xe:
echo "<br> Audi:";
echo "<br> Tên xe:" .$audi->ten;
echo "<br> Màu xe:" .$audi->mau;

echo "<br> Van:";
echo "<br> Tên xe:" .$van->ten;
echo "<br> Màu xe:" .$van->mau;

//Gọi phương thức của lớp:
echo "<br>";
$audi->di(100, "Hà Nội"); //Gọi phương thức của lớp
echo "<br>";
$van->di(200,"HCM");//Gọi phương thức của lớp
 ?>