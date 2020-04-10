<?php 

class Posts{
	private $title;
	private $link;
	private $description;
	private $content;


	function setTitle($title){
		$this->title = $title;
	}
	function getTitle(){
		return $this->title;
	}
	function setLink($link){
		$this->link = $link;
	}
	function getLink(){
		return $this->link;
	}
	function setDescription($description){
		$this->description = $description;
	}
	function getDescription(){
		return $this->description;
	}
	function setContent($content){
		$this->content = $content;
	}
	function getContent(){
		return $this->content;
	}
	function Desplay(){
		echo "<br>";
		echo "<br><i>-------Thông tin bài viết--------</i>";
		echo "<br><b>Title:</b>" .$this->title;
		echo "<br><b>Link:</b>" .$this->link;
		echo "<br><b>Description:</b>" .$this->description;
		echo "<br><b>Content:</b>" .$this->content;
		echo "<br>";
		
	}
}
//Khởi tạo đối tượng:
$post1 = new Posts();
//Gán giá trị:
$post1->setTitle('Rakitic "chơi dại" chọc tức Messi: Triệu fan phẫn nộ, đòi đuổi khỏi Barca');
	$post1->setLink('24h.com.vn');
	$post1->setDescription('Ivan Rakitic phạm phải sai lầm không thể tha thứ. Đó là đăng một bức ảnh “đánh bại” Messi trên mạng xã hội và phải nhận vô số gạch đá từ fan Barcelona.');
	$post1->setContent('Tại Barcelona, có một quy luật ngầm bất thành văn đáng sợ còn tồn tại xoay quanh Lionel Messi. Đây là ngôi sao của CLB không ai được phép đụng đến. Vì theo thời gian, Messi đã trở thành 1 biểu tượng bất khả xâm phạm, một người có tầm ảnh hưởng đến Barcelona cả trong lẫn ngoài sân cỏ.');
//Gọi phương thức:
$post1->Desplay();

//Khởi tạo đối tượng:
$post2 = new Posts();
//Gán giá trị:
$post2->setTitle('Rashford chọn siêu đội hình MU: Ronaldo - Rooney tái hợp');
	$post2->setLink('24h.com.vn');
	$post2->setDescription('Ronaldo, Rooney là 2 trong số 6 ngôi sao được Marcus Rashford lựa chọn vào "đội hình trong mơ" của mình.');
	$post2->setContent('Trong buổi giao lưu trực tuyến với người hâm mộ trên Instagram mới đây, Marcus Rashford đã được yêu cầu lựa chọn đội hình 6 cầu thủ yêu thích nhất. Không ngoài dự đoán, cả 6 cái tên lọt vào "mắt xanh" của tiền đạo 22 tuổi đều là những người đã và đang khoác áo MU. ');
//Gọi phương thức:
$post2->Desplay();

//Khởi tạo đối tượng:
$post3 = new Posts();
//Gán giá trị:
$post3->setTitle('"Bom tấn" Haaland "bật đèn xanh", MU - Real tranh nhau kích nổ');
	$post3->setLink('24h.com.vn');
	$post3->setDescription('Ngôi sao đang được cả châu Âu thèm muốn - tiền đạo Erling Haaland đã đánh tiếng muốn sớm rời Dortmund. Đây là tin không thể vui hơn với cả MU và Real Madrid vào lúc này.');
	$post3->setContent('Ở kỳ chuyển nhượng tháng Giêng năm nay, MU đã bỏ lỡ cơ hội tốt để chiêu mộ Erling Haaland và để Borussia Dortmund "nẫng tay trên".Tại Dortmund, Haaland đã tỏa sáng rực rỡ khi anh ghi đến 12 bàn thắng sau 11 lần ra sân cho CLB nước Đức, nâng tổng số bàn thắng của "sao mai" này lên 40 bàn trong 33 trận mùa giải 2019/20.');
//Gọi phương thức:
$post3->Desplay();

?>