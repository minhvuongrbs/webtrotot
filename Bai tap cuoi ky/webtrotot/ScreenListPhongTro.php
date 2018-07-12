<?php
	include_once("db/db_connect.php");
	$sql="select post_rooms.id,gallery_post_rooms.path,post_rooms.address,users.name,type,post_rooms.rate,post_rooms.created_at from post_rooms inner join users on post_rooms.user_id=users.id inner join gallery_post_rooms on gallery_post_rooms.post_room_id=post_rooms.id order by created_at desc ";
	if(isset($_SESSION['username'])){
		$sql2="select * from users where username='".$_SESSION['username']."'";
		$result2=mysqli_query($link,$sql2);
		$row2=mysqli_fetch_assoc($result2);
	}
	$result=mysqli_query($link,$sql);
	mysqli_set_charset($link,"utf8");
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<style media="screen">

	</style>
	<meta charset="utf-8">
	<title>Danh sách phòng trọ</title>
	<link rel="stylesheet" href="library\css\bootstrap.css">
    <link rel="stylesheet" href="library\customFrontEnd\ScreenListPhongTro.css">
	<link rel="stylesheet" href="library\js\bootstrap.js">
 	<link rel="stylesheet" href="library\fontawesome-free-5.0.13\web-fonts-with-css\css\fontawesome-all.css">
	<script type="text/javascript" src="library/js/jquery-3.3.1.min.js">
	</script>
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
		<?php if(isset($_SESSION['username'])){ ?>
			<div class=" align-self-center mr-2" >
				<a href="ScreenQLPT_DanhSachBaiDang.php"><img src=<?php echo $row2['image'] ?> alt="Avatar" class="avatar"></a>
				<span class><?php echo $row2['name'] ?></span>
			</div>
			<form class="form-inline my-2 my-lg-0">
	      <button class="btn btn-outline-success my-2 my-sm-0" type="button" onclick="destroy()">Đăng xuất</button>
	    </form>
<?php }else{ ?>
<div class=" align-self-center mr-2">
	<img src="library/image/account.png" alt="Avatar" class="avatar">
	<span class>Nặc danh</span>
</div>
<form class="form-inline my-2 my-lg-0">
	<a href="login.php"><button class="btn btn-outline-success my-2 my-sm-0" type="button">Đăng nhập</button></a>
</form>
<?php } ?>

  </div>
</nav>


  <div  class="container mt-2" >
    <div class="page-header">
      <h2 id="timeline">Danh sách phòng trọ</h2>

			<div class="box">
  			<div class="form-control">
      <input type="search" id="search" placeholder="Search..." size="35" />
			<input type="button" value="Search" class="btn btn-success">
  			</div>
			</div>

			<!-- <input type="search" id="search" name="search" placeholder="Search" size="35"> -->
      <hr>
    </div>
      <ul class="timeline" id="detail">
				<?php while($row=mysqli_fetch_assoc($result)){ ?>
        <li class= "timeline-inverted" id="itemList" onclick="clickItem(<?php echo $row['id'] ?>)">

          <div class="timeline-panel" >

            <div class="timeline-body">
              <p class="last mb-1">
              Phòng trọ <strong><?php echo $row['name'] ?></strong> cho thuê phòng<strong>&nbsp;<?php echo $row['type'] ?></strong></p>
              <p>
              <span>Giá :</span> <?php echo $row['rate'] ?> <span>VND</span>
              </p>
              <p>
								<span>Địa chỉ :</span> <?php echo $row['address'] ?>
              </p>
            </div>

            <div class="timeline-heading">
              <p><small class="text-muted"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $row['created_at'] ?></small></p>
            </div>
          </div>
        </li>
				<?php } ?>
      </ul>

  </div>
<script type="text/javascript">
$(document).ready(function(){
	$('#search').keyup(function () {
		var dataSearch=$(this).val();
		$.ajax({
			type: "GET",
			url: "search.php",
			data: {dataSearch:dataSearch},
			success: function (response) {
				$('#detail').html(response).show();
				}
		});
	});
});

	function clickItem(itemUsername) {
		window.location.href=window.location.origin+"/screenchitietphongtro.php?data="+itemUsername

	}
	function destroy() {
		window.location.href=window.location.origin+"/controller/remove_session.php"
	}

</script>
</body>
</html>
