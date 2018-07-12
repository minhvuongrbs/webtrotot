
<!DOCTYPE html>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="library\css\bootstrap.css">
    <link rel="stylesheet" href="library\customFrontEnd\Register.css">
	<link rel="stylesheet" href="library\js\bootstrap.js">
 	<link rel="stylesheet" href="library\fontawesome-free-5.0.13\web-fonts-with-css\css\fontawesome-all.css">
	<script type="text/javascript" src="library/js/jquery-3.3.1.min.js">
	</script>
</head>
<body>
    <div class="login-page" id="wrraper" style="">
  <div class="row justify-content-md-center">
    <div class="panel">

      <form  method="post" enctype="multipart/form-data" action="controller/check_register.php">
        <h1 class="pb-3">ĐĂNG KÝ TÀI KHOẢN</h1>
        <div class="form-content">
          <div class="form-group text-left no-gutters">
          <label >Tên đăng nhập:</label>
            <input type="text" class="form-control" placeholder="Tên đăng nhập" name="username" >
            <div class="invalid-feedback" >

            </div>
          </div>

          <div class="form-group text-left no-gutters">
          <label >Mật khẩu:</label>
            <input type="password" class="form-control" placeholder="Mật khẩu" name="password" >
            <div class="invalid-feedback" >

            </div>
          </div>

           <div class="form-group text-left">
           <label >Họ và tên:</label>
            <input type="text" class="form-control" placeholder="Họ và tên" name="name" >
            <div class="invalid-feedback" >

            </div>
          </div>

          <div class="form-group text-left">
          <label >Địa chỉ:</label>
            <input type="text" class="form-control" placeholder="Địa chỉ" name="address" >
            <div class="invalid-feedback" >

            </div>
          </div>
          <div class="form-group text-left">
          <label >Email:</label>
            <input type="text" class="form-control" placeholder="email" name="email" >
            <div class="invalid-feedback" >
            </div>
          </div>
					<div class="form-group text-left">
					<label >Số điện thoại:</label>
						<input type="text" class="form-control" placeholder="Số điện thoại" name="phone" >
						<div class="invalid-feedback" >
						</div>
					</div>
            <!-- <form method="post" enctype="multipart/form-data" action=""> -->

                <div class="row">
                    <div class="col-md-7">
                             <input type="file" name="fileToUpload" class="btn btn-info" id="fileToUpload">
                    </div>

                </div>


            <!-- </form> -->
            <button type="submit" class="btn btn-primary w-100 mt-2 text-uppercase">Đăng ký</button>

            <a href="login.php" class="btn btn-forgot mt-2">Quay trở lại đăng nhập</a>
        </div>



      </form>

    </div>
  </div>

  <footer class="text-dark">Copyright &copy; 2017. Bản quyền thuộc về Trọ tốt.</footer>
</div>
</body>
</html>
