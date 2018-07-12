<?php
	include_once("db/db_connect.php");
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	$sql="select * from users where id='".$_SESSION['id']."'";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="library\css\bootstrap.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenListPhongTro.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenQuanLyPhongTro.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenQLPT_TTCN.css">
	<link rel="stylesheet" href="library\js\bootstrap.js">
 	<link rel="stylesheet" href="library\fontawesome-free-5.0.13\web-fonts-with-css\css\fontawesome-all.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="ScreenListPhongTro.php">TRỌ TỐT</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Danh sách Phòng Trọ <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Đăng tin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quảng cáo / Rao vặt</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="#">Tìm hiểu thêm về chúng tôi</a>
      </li>
    </ul>
    <div class=" align-self-center mr-2">
    <img src=<?php echo $row['image'] ?> alt="Avatar" class="avatar">
    <span class><?php echo $row['name'] ?></span>
    </div>

    <form class="form-inline my-2 my-lg-0">
      <a href="controller/remove_session.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Đăng xuất</button></a>
    </form>
  </div>
</nav>

<section id="main-container" class="main-container " >
	<nav class="sidebar" >

	<ul class="list-group">
	        <li>
	            <a href="screenqlpt_trangchu.php"class="font-weight-bold list-group-item item">
	                <i class="fa fa-2x fa-home mr-4"></i>&nbsp;Trang chủ</a>
	        </li>
	        <li>
	            <a href="ScreenQLPT_DangBai.php"class="font-weight-bold list-group-item  item ">
	                <i class="fa fa-2x fa-tag mr-4 "></i>&nbsp;Đăng bài</a>
	        </li>
	        <li>
	            <a href="ScreenQLPT_DanhSachBaiDang.php"class="font-weight-bold list-group-item  item">
	                <i class="fa fa-2x fa-address-book mr-4"></i>&nbsp;Danh sách bài đăng</a>
	        </li>
	        <li class="is-active">
	            <a class="font-weight-bold list-group-item  item" >
	                <i class="fa fa-2x fa-user mr-4"></i>&nbsp;Thông tin cá nhân</a>
	        </li>
	    </ul>

	</nav>

<div class="margin-sidebar">
<div  class="container mt-3 " >
    <div >
  <form >

    <div class="d-flex">
      <div class="column1">
        <div class="card">
          <div class="card-header">
            Hình đại diện
          </div>
          <div class="avatar-photo w-100">
            <div class="user-info__photo">
              <img class="w-100" src=<?php echo $row['image'] ?> alt="Hình đại diện" />

            </div>

          </div>
        </div>
      </div>
      <div class="column2 pl-4  ml-auto">
        <div class="card">
          <div class="card-header">
            THÔNG TIN CÁ NHÂN
          </div>
          <div #img class="card-body">
            <div class="row mt-3">
              <div class="col-md-6 col-lg-6">
                <div class="group mb-5">
                  <input type="text" readonly tabindex="1" value="<?php echo $row['name'] ?>">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="">Họ tên</label>
                </div>
                <div class="group mb-5">
                  <input type="text" readonly  tabindex="3" value="<?php echo $row['phone'] ?>">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Số điện thoại</label>
                </div>
                <div class="group mb-5">
                  <input type="text" readonly value="<?php echo $row['created_at'] ?>"  tabindex="5">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Ngày tạo tài khoản</label>
                </div>
              </div>
              <div class="col-md-6 col-lg-6">
                <div class="group mb-5" >
                  <input type="text" readonly value="<?php echo $row['address'] ?>" tabindex="2">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label class="">Địa chỉ</label>
                </div>
                <div class="group mb-5" >
                  <input type="text" readonly value="<?php echo $row['email'] ?>" tabindex="4">
                  <span class="highlight"></span>
                  <span class="bar"></span>
                  <label>Email</label>
                </div>
                <div class="group">

                </div>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>

  </form>
</div>

  </div>
</div>

  </section>





</body>
</html>
