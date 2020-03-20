<!DOCTYPE html>
<html>
<head>
	<title>Bài 2</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Form</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">

	<!-- Optional theme -->
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap-theme.min.css">

	<!-- Latest compiled and minified JavaScript -->
	<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.1/js/bootstrap.min.js"></script>
	<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script type="text/javascript" src="jquery.validate.min.js"></script>
</head>
<body>
	<div class="container">
		<form action="add_process.php" method="GET" role="form" id="formLogin">
			<legend style="text-align: center;"><h3><b>Thực hành gửi dữ liệu dùng POST</b></h3></legend>

			<div class="form-group">
				<label for="">Mã sinh viên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập mã sinh viên" name="id">
			</div>

			<div class="form-group">
				<label for="">Họ và tên</label>
				<input type="text" class="form-control" id="" placeholder="Nhập họ và tên" name="name">
			</div>  
			<div class="form-group">
				<label for="">Số điện thoại</label>
				<input type="text" class="form-control" id="" placeholder="Nhập vào số điện thoại" name="phone">
			</div>  
			<div class="form-group">
				<label for="">Email</label>
				<input type="email" class="form-control" id="" placeholder="Nhập vào email" name="email">
			</div>  
			<div class="form-group">
				<label for="">Giới tính</label><br>
				<input type="radio" name="gender" value="Nam"> Male
				<input type="radio" name="gender" value="Nữ"> FeMale
				<input type="radio" name="gender" value="Khác"> Other
			</div>  
			<div class="form-group">
				<label for="">Địa chỉ</label>
				<input type="text" class="form-control" id="" placeholder="Nhập vào địa chỉ" name="address">
			</div>  
			
			<button type="submit" name="submit" class="btn btn-primary">Lưu thông tin</button>
		</form>
	</div>
	<script type="text/javascript">
       $(document).ready(function() {

        $("#formLogin").validate({
            rules: {
                id: "required",
                name: "required",
                phone:"required",
                email: "required",
                gender: "required",
                address: {
                    required: true,
                    minlength: 2
                }
            },
            messages: {
                id: "Vui lòng nhập mã sinh viên",
                name: "Vui lòng nhập họ và tên",
                phone: "Vui lòng nhập số điện thoại",
                email: "Vui lòng nhập email",
                gender: "Vui lòng chọn giới tính",
                address: {
                    required: "Vui lòng nhập địa chỉ",
                    minlength: "Địa chỉ ngắn vậy, chém gió ah?"
                }
            }
        });
    });
</script>
</body>
</html>
