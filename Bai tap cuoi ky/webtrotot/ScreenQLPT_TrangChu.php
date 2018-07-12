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
	<link rel="stylesheet" href="library\js\bootstrap.js">
 	<link rel="stylesheet" href="library\fontawesome-free-5.0.13\web-fonts-with-css\css\fontawesome-all.css">
	  <link rel="stylesheet" href="library\customFrontEnd\screenqlpt_trangchu.css">
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

<nav class="sidebar" >

<ul class="list-group">
        <li class="is-active">
            <a class="font-weight-bold list-group-item item" >
                <i class="fa fa-2x fa-home mr-4"></i>&nbsp;Trang chủ</a>
        </li>
        <li>
            <a href="ScreenQLPT_DangBai.php"class="font-weight-bold list-group-item  item">
                <i class="fa fa-2x fa-tag mr-4"></i>&nbsp;Đăng bài</a>
        </li>
        <li>
            <a href="ScreenQLPT_DanhSachBaiDang.php"class="font-weight-bold list-group-item  item">
                <i class="fa fa-2x fa-address-book mr-4"></i>&nbsp;Danh sách bài đăng</a>
        </li>
        <li>
            <a href="ScreenQLPT_TTCN.php"class="font-weight-bold list-group-item  item" >
                <i class="fa fa-2x fa-user mr-4"></i>&nbsp;Thông tin cá nhân</a>
        </li>
    </ul>

</nav>


  <div  class="container-fluid" >


  </div>





</body>
</html>
