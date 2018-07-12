<?php
	session_start();
	if(isset($_SESSION["username"])){
		header("location:index.php");
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<style>
	form{
		margin: 0 auto;
		padding: 20px;
		padding-left: 40px;
		width: 440px;
		border: 1px solid black;
	}
	</style>
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="/library/css/bootstrap.css">
	<script src="library/js/jquery-3.3.1.min.js"></script>
</head>
<body>
<h2 align="center">Đăng nhập</h2>
<form class="form-group 	" align="center">
	<div id="error" style="color: red;"></div><div id="ok" style="color: green"></div>
	Tên đăng nhập<input class="form-control" type="text" id = "username" name="username"><br>
	Mật khẩu<input class="form-control" type="password" id = "password" name="password"><br>
	<input type="button" id="btn_submit" name='btn_submit' class="btn-success" value="Đăng nhập">
	<a href="signup.php"><input type="button" id="btn_submit" name='btn_submit' class="btn-primary" value="Đăng ký" ></a>
</form>
<script type="text/javascript">
	$("#btn_submit").on("click", function(){
		var username = $("#username").val();
		var password = $("#password").val();
		var error = $("#error");
		var ok = $("#ok");

		// resert 2 thẻ div thông báo trở về rỗng mỗi khi click nút đăng nhập
		error.html("");
		ok.html("");

		// Kiểm tra nếu username rỗng thì báo lỗi
		if (username == "") {
			error.html("Tên đăng nhập không được để trống");
			return false;
		}
		// Kiểm tra nếu password rỗng thì báo lỗi
		if (password == "") {
			error.html("Mật khẩu không được để trống");
			return false;
		}

		// Chạy ajax gửi thông tin username và password về server check_dang_nhap.php
		// để kiểm tra thông tin đăng nhập hợp lệ hay chưa
		$.ajax({
		  url: "check_dang_nhap.php",
		  method: "POST",
		  data: { username : username, password : password },
		  success : function(success){
		  	if (success == "1") {
          window.location.href=window.location.origin+"/index.php"
		  	}else{
						alert("Dang nhap that bai");
		  	}
		  }
		});

	});
</script>
</body>
</html>
