<?php 

class User{
	private $name;
	private $email;
	private $pass;
	private $avatar;

	function setName($name){
			$this->name = $name;
	}
	function getName(){
		return $this->name;
	}
	function setEmail($email){
		$this->email=$email;
	}
	function getEmail(){
		return $this->email;
	}
	function setPass($pass){
		$this->pass=$pass;
	}
	function getPass(){
		return $this->pass;
	}
	function setAvatar($avatar){
		$this->avatar=$avatar;
	}
	function getAvatar(){
		return $this->avatar;
	}
	function Display(){
		echo "<br>";
		echo "<i>-------Thông tin người dùng-----</i>";
		echo "<br><b>User name:</b>" .$this->name;
		echo "<br><b>Email:</b>" .$this->email;
		echo "<br><b>Password:</b>" .$this->pass;
		echo "<br><b>Avatar:</b>" .$this->avatar;
		echo "<br>";
	}
	
}
$user1= new User();
$user1->setName('Đặng Tuấn Anh');
$user1->setEmail('tuananh@gmail.com');
$user1->setPass('123');
$user1->setAvatar('avatar.png');

echo $user1->Display();

$user2= new User();
$user2->setName('Đỗ Tùng Lâm');
$user2->setEmail('lam@gmail.com');
$user2->setPass('456');
$user2->setAvatar('avatar.png');

echo $user2->Display();

$user3= new User();
$user3->setName('Giang Đức Duy');
$user3->setEmail('duy@gmail.com');
$user3->setPass('789');
$user3->setAvatar('avatar.png');

echo $user3->Display();
 ?>