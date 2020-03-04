<?php

//Khai báo biến: 
/*echo "Hello World<br>";
echo "Zent Group<br>";
$name = "Dang Tuan Anh";
echo $name . " <b>Xin chào Zent Group!</b>";*/


/*$name1 = "Zent Group";
$slogan = "where your code begins !<br>";
echo "slogan $name1 - $slogan";
echo 'slogan ' . $name1 . '-' .$slogan;
echo "slogan Zent -$slogan";*/


//Hằng số:
/*define('USER', 'zentgroup');
define('PASS', '123456');

echo USER;
echo " " .PASS;
*/

//Các kiểu dữ liệu:

/*echo 100;
echo "xin chào";
echo 1.2;
echo true;
echo false;
$a = [1,2,3,4,5];*/


//Ép kiểu:
 // $point = "10";   // Kiểu chuỗi
 // $point1 = (int)$point;    // Ép sang kiểu int để sử dụng cho các phép toán

//Toán tử:
/*echo 10+8 . "<br>";
echo 10-8 . "<br>";
echo 10/8 . "<br>";
echo 10*8 . "<br>";
echo 10%8 . "<br>";*/

//x-a = b:
/*$a = 10;
$b = 20;
$x =$b - $a ;
echo "x = " .$x;*/

//Toán tử so sánh:
/*$a = 5;
echo $a > 4;*/

/*$a =5;
$a++;

$b =10;
$a +=$b;
echo $a;*/

//Cấu trúc điều khiển rẽ nhánh:

//if-else lồng nhau:
/*$numb= 7;
if ($numb >0) {
	echo "Số " . $numb . " là số dương!<br>";
	if ($numb%2==0) {
		echo $numb . " là số dương chẵn!";
	}else{
		echo $numb . " là số dương lẻ!";
	}
}elseif ($numb <0) {
	echo "Số " . $numb . " là số âm!<br>";
	if ($numb%2==0) {
		echo $numb  . "là số âm chẵn!";
	}else{
		echo $numb  . "là số âm lẻ!";
	}
}else{
	echo "Số " . $numb . "là số 0";
}*/

//Nhiều điều kiện:
/*$numb = 8;
if ($numb==2) {
	echo "Hôm nay là thứ hai!";
}else if ($numb==3) {
	echo "Hôm nay là thứ ba!";
}else if ($numb==4) {
	echo "Hôm nay là thứ tư!";
}else if ($numb==5) {
	echo "Hôm nay là thứ năm!";
}else if ($numb==6) {
	echo "Hôm nay là thứ sáu!";
}else if ($numb==7) {
	echo "Hôm nay là thứ bảy!";
}else if ($numb==8) {
	echo "Hôm nay là Chủ nhật!";
}else{
	echo "Không hợp lệ!";
}*/


//Điều kiện Switch...case:
/*$numb = 3;
switch ($numb) {
	case 2:{
		echo "Hôm nay là thứ hai!";
	}break;
	case 3:{
		echo "Hôm nay là thứ ba!";
	}break;
	case 4:{
		echo "Hôm nay là thứ tư!";
	}break;
	case 5:{
		echo "Hôm nay là thứ năm!";
	}break;
	
	default:{
		echo "Không hợp lệ!";
	}break;
}*/

//Cấu trúc điều kiện lặp:
//Vòng lặp for:

/*for ($i=1; $i <=10 ; $i++) { 
	echo "<br>Xin Chào!";
}*/

//Vòng lặp while:
/*$i=1;
while ($i <= 10) {
	echo "<br>Xin Chào!";
	$i++;
}*/

//Vòng lặp do....while:
$i=1;
do {
	echo "<br>Xin Chào!";
	$i++;
} while ($i <= 10);
?>