<?php
	include_once("db/db_connect.php");
	if(!isset($_SESSION['username'])){
		header("location:login.php");
	}
	$sql="select post_rooms.id,gallery_post_rooms.path,post_rooms.address,users.name,type,post_rooms.rate,post_rooms.created_at from post_rooms inner join users on post_rooms.user_id=users.id inner join gallery_post_rooms on gallery_post_rooms.post_room_id=post_rooms.id where username='".$_SESSION['username']."' order by created_at desc ";
	if(isset($_SESSION['username'])){
		$sql2="select * from users where username='".$_SESSION['username']."'";
		$result2=mysqli_query($link,$sql2);
		$row2=mysqli_fetch_assoc($result2);
	}
	$sql3="select count(*) from post_rooms where user_id='".$_SESSION['id']."'";
	$result3=mysqli_query($link,$sql3);
	$row3=mysqli_fetch_assoc($result3);
	$result=mysqli_query($link,$sql);
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
    <link rel="stylesheet" href="library\customFrontEnd\ScreenListPhongTro.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenQLPT_DanhSachBaiDang.css">
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
    <img src=<?php echo $row2['image'] ?> alt="Avatar" class="avatar">
    <span class><?php echo $row2['name'] ?></span>
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
            <a href="screenqlpt_dangbai.php"class="font-weight-bold list-group-item  item">
                <i class="fa fa-2x fa-tag mr-4"></i>&nbsp;Đăng bài</a>
        </li>
        <li class="is-active">
            <a class="font-weight-bold list-group-item  item">
                <i class="fa fa-2x fa-address-book mr-4"></i>&nbsp;Danh sách bài đăng</a>
        </li>
        <li>
            <a href="screenqlpt_ttcn.php"class="font-weight-bold list-group-item  item" >
                <i class="fa fa-2x fa-user mr-4"></i>&nbsp;Thông tin cá nhân</a>
        </li>
        <!-- <li>
            <a class="font-weight-bold list-group-item item">
                <i class="fas fa-2x fa-sign-out-alt mr-4"></i>&nbsp;Đăng xuất</a>
        </li> -->
    </ul>

  </nav>
<div class="margin-sidebar">
<div  class="container mt-3 " >
    <div class="page-header">
      <h3 id="timeline">Danh sách bài đăng <span>(<?php echo $row3['count(*)'] ?> bài đăng )</span></h3>
      <hr>
    </div>
		<?php while($row=mysqli_fetch_assoc($result)){ ?>
      <ul class="timeline">
        <li class= "timeline-inverted" >

          <div class="timeline-panel" >

            <div class="timeline-body">
              <p class="last mb-1">
              Phòng trọ <strong><?php echo $row['name'] ?></strong> cho thuê phòng<strong>&nbsp;<?php echo $row['type'] ?></strong></p>
							<p>
              <span>Giá :</span> <?php echo $row['rate'] ?> <span>VND </span>&emsp;&emsp;&emsp; <span>Địa chỉ :</span> <?php echo $row['address'] ?>
              </p>
              <p>

              </p>
            </div>
            <div class="timeline-heading">
              <p><small class="text-muted"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $row['created_at'] ?></small></p>
            </div>
          </div>
        </li>
      </ul>
<?php } ?>
  </div>
</div>

  </section>




</body>
</html>
