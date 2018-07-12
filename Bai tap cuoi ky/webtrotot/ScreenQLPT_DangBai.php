<?php
	include_once("db/db_connect.php");
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	// $sql="select post_rooms.id,gallery_post_rooms.path,post_rooms.address,users.name,type,post_rooms.rate,post_rooms.created_at from post_rooms inner join users on post_rooms.user_id=users.id inner join gallery_post_rooms on gallery_post_rooms.post_room_id=post_rooms.id where username='".$_SESSION['username']."' order by created_at desc ";
	if(isset($_SESSION['username'])){
		$sql2="select * from users where username='".$_SESSION['username']."'";
		$result2=mysqli_query($link,$sql2);
		$row2=mysqli_fetch_assoc($result2);
	}
	// $result=mysqli_query($link,$sql);
	mysqli_set_charset($link,"utf8");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Đăng nhập</title>
	<link rel="stylesheet" href="library\css\bootstrap.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenListPhongTro.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenQuanLyPhongTro.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenQLPT_DangBai.css">
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
        <a class="nav-link " href="#">Đăng tin</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Quảng cáo / Rao vặt</a>
      </li>

      <li class="nav-item">
        <a class="nav-link " href="#">Tìm hiểu thêm về chúng tôi</a>
      </li>
    </ul>
    <div class=" align-self-center mr-2">
    <img src=<?php echo $row2['image'] ?> alt="Avatar" class="avatar">
    <span class><?php echo $row2['name'] ?></span>
    </div>

    <form class="form-inline my-2 my-lg-0">

      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Đăng xuất</button>
    </form>
  </div>
</nav>

<nav class="sidebar" >

<ul class="list-group">
        <li>
            <a href="screenqlpt_trangchu.php"class="font-weight-bold list-group-item item">
                <i class="fa fa-2x fa-home mr-4"></i>&nbsp;Trang chủ</a>
        </li>
        <li class="is-active">
            <a class="font-weight-bold list-group-item  item ">
                <i class="fa fa-2x fa-tag mr-4 "></i>&nbsp;Đăng bài</a>
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
<div class="margin-sidebar">
<div  class="container mt-3 " >
    <div class="page-header">
      <h3 id="timeline">Đăng bài giới thiệu phòng trọ</h3>
      <hr>
    </div>
    <form method="post" action="controller/check_upData.php">
    <div class="row">
      <div class=" col-md-6 form-group">
         <label for="address">Địa chỉ phòng trọ:</label>
         <input name="address" class="form-control" id="address">
      </div>
      <div class="col-md-6 form-group">
         <label for="name">Liên hệ:</label>
         <input name="name" class="form-control" id="name">
      </div>
    </div>

    <div class="row">
      <div class=" col-md-6 form-group">
         <label for="phone">Số điện thoại:</label>
         <input name="phone" class="form-control" id="phone">
      </div>
      <div class="col-md-6 form-group">
         <label for="rate">Tiền thuê:</label>
         <input name="rate" class="form-control" id="rate">
      </div>
    </div>

		<div class="row">
			<div class=" col-md-6 form-group">
				 <label for="type">Loại phòng:</label>
				 <input name="type" class="form-control" id="type">
			</div>
			<div class="col-md-6 form-group">
				 <label for="roomname">Tên phòng trọ:</label>
				 <input name="roomname" class="form-control" id="roomname">
			</div>
		</div>


    <div class="row">
      <div class=" col-md-6 form-group">
         <div >Nội dung:</div>
         <textarea name="description"class="form-control" cols="70" rows="10" placeholder="Mô tả phòng trọ của bạn"></textarea>
      </div>
      <div class="col-md-6 form-group">

           <!-- <form action="upload.php" method="post" enctype="multipart/form-data"> -->
               Chọn ảnh phòng trọ
               <div class="row">
                   <div class="col-md-7">
                            <input type="file" name="fileToUpload" class="btn btn-info" id="fileToUpload">
                   </div>
                   <!-- <div class="col-md-5">
                            <input type="submit" class="btn btn-success" value="Tải ảnh" name="submit">
                   </div> -->
               </div>
           <!-- </form> -->
           <div class="form-group mt-3">
               <label for="pwd">Nhập tọa độ:</label>
                <div class="row p-4">
                    <div class="col-md-6 form-group">
                         <label for="longitude">Tung độ:</label>
                         <input name="longitude" class="form-control" id="longitude">
                    </div>
                    <div class="col-md-6 form-group">
                    <label for="latitude">Vĩ độ</label>
                         <input name="latitude" class="form-control" id="latitude">
                    </div>
                </div>
                <a href="https://www.latlong.net/" target="_blank">Xác định vị trí theo tọa độ</a>
          </div>
      </div>
    </div>
  <button type="submit" class="mt-3 btn btn-primary">Đăng bài</button>
</form>

  </div>
</div>





</body>
</html>
