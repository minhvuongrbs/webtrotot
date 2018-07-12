<?php
	include_once("db/db_connect.php");
	if(isset($_SESSION['username'])){
		header("location:screenlistphongtro.php");
	}
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="library\css\bootstrap.css">
    <link rel="stylesheet" href="library\customFrontEnd\Login2.css">
	<link rel="stylesheet" href="library\js\bootstrap.js">
 	<link rel="stylesheet" href="library\fontawesome-free-5.0.13\web-fonts-with-css\css\fontawesome-all.css">
	<script src="library/js/jquery-3.3.1.min.js">
	</script>
</head>
<body>

<div class="login-page" id="wrraper" style="">
  <div class="row justify-content-md-center">
    <div class="panel">

      <form >
        <h1 class="pb-3">TRỌ TỐT</h1>
        <div class="form-content">
          <div class="form-group text-left">
            <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" id="username" >
            <div class="invalid-feedback" >
            </div>
          </div>

          <div class="form-group text-left">
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" id="password" >
            <div class="invalid-feedback" >

            </div>
          </div>
        </div>
        <button type="button" id="submit" class="btn btn-primary w-100 mt-2 text-uppercase">Đăng nhập</button>

        <a href="register.php" class="btn btn-forgot mt-2">Đăng ký</a>
      </form>

    </div>
  </div>

  <footer class="text-dark">Copyright &copy; 2017. Bản quyền thuộc về Trọ Tốt.</footer>
</div>
</body>
<script type="text/javascript">
	$('#submit').on("click",function () {
		var username=$('#username').val();
		var password=$('#password').val();
		if(username=="")	{
			alert('Tên đăng nhập không được để trống');
			return false;
	}
		if(password=='') {
			alert('Mật khẩu không được để trống');
			return false;
		}
		$.ajax({
		  url: "controller/check_login.php",
		  method: "POST",
		  data: { username : username, password : password },
		  success : function(data){
				if (data == "1") {
          window.location.href=window.location.origin+"/ScreenListPhongTro.php"
		  	}else{
						alert("Đăng nhập thất bại");
		  	}
		  	}
		});
	});
</script>
</html>
