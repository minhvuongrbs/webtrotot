<?php
	include_once("db/db_connect.php");
	$idpost=$_GET['data'];
	$sql="select post_rooms.longitude,post_rooms.latitude,post_rooms.description,post_rooms.roomname,gallery_post_rooms.path,post_rooms.rate,post_rooms.address,users.phone,users.name,post_rooms.created_at from post_rooms inner join users on post_rooms.user_id=users.id inner join gallery_post_rooms on gallery_post_rooms.post_room_id=post_rooms.id where post_rooms.id='".$idpost."'";
	$result=mysqli_query($link,$sql);
	$row=mysqli_fetch_assoc($result);
	if(isset($_SESSION['username'])){
	$sql2="select * from users where username='".$_SESSION['username']."'";
	$result2=mysqli_query($link,$sql2);
	$row2=mysqli_fetch_assoc($result2);}
	mysqli_set_charset($link,"utf8");
 ?>
 <!DOCTYPE html>
 <!DOCTYPE html>
 <html lang="en">
 <head>
 	<meta charset="UTF-8">
 	<title>Chi tiết phòng trọ</title>
 	<link rel="stylesheet" href="library\css\bootstrap.css">
     <link rel="stylesheet" href="library\customFrontEnd\ScreenListPhongTro.css">
 	<link rel="stylesheet" href="library\js\bootstrap.js">
      <link rel="stylesheet" href="library\fontawesome-free-5.0.13\web-fonts-with-css\css\fontawesome-all.css">
      <style>
          #map{
              width: 100%;
              height: 400px;
          }
      </style>
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
 				<a href="screenqlpt_danhsachbaidang.php"><img src=<?php echo $row2['image'] ?> alt="Avatar" class="avatar"></a>
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
 </nav>

   <div  class="container-fluid mt-2" >
     <div class="page-header">
       <h3 >
       <a href="ScreenListPhongTro.php">
         <i class="fa fa-chevron-left mr-3" aria-hidden="true"></i>
       </a>
       Chi Tiết Phòng Trọ : <span><?php echo $row['roomname'] ?> </span>

       </h3>
       <hr>
     </div>
   </div>



 <div class="container-fluid">
   <div class="row">
     <div class="col-md">
       <div>
       <div class="row">
               <div class="col-md-3">
                  <span>Đã đăng vào lúc</span>
               </div>
               <div class="col-md-8">
                  <span><?php echo $row['created_at'] ?></span>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <span>Địa chỉ</span>
               </div>
               <div class="col-md-8">
                   <span><?php echo $row['address'] ?></span>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                   <span>Liên hệ</span>
               </div>
               <div class="col-md-8">
                     <?php echo $row['name'] ?>
               </div>
           </div>
           <div class="row">
               <div class="col-md-3">
                 <span>Số điện thoại</span>
               </div>
               <div class="col-md-8">
                   <span><?php echo $row['phone'] ?></span>
               </div>
           </div>
           <div class="row pd-4">
               <div class="col-md-3">
                   <span>Tiền thuê</span>
               </div>
               <div class="col-md-8">
               <span><?php echo $row['rate'] ?></span><span>VND</span>
               </div>
           </div>

					 <div class="row pd-4">
							 <div class="col-md-3">
									 <span>Noi dung</span>
							 </div>
							 <div class="col-md-9">
								 <textarea ROWS=3 COLS=50 disabled="true"><?php echo $row['description'] ?>
							 </textarea>
							 </div>
					 </div>

           <p>Hình ảnh</p>
           <div class="d-flex justify-content-around">
              <div>
                  <img src="<?php echo $row['path'] ?>" height="300" width="420">
              </div>
           </div>


       </div>
     </div>
     <div class="col-md">
           <p>Bản đồ</p>
           <div id="map"></div>

     </div>

   </div>
 </div>

     <script>
       function initMap() {
         var uluru = {lat: <?php echo $row['latitude'] ?>, lng: <?php echo $row['longitude'] ?>};
         var map = new google.maps.Map(document.getElementById('map'), {
           zoom: 15,
           center: uluru
         });
         var marker = new google.maps.Marker({
           position: uluru,
           map: map
         });
       }
     </script>
     <script async defer
     src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBYUR74liR_jrjozuj3fUyNFirvPjQJOFU&callback=initMap">
     </script>
		 <script type="text/javascript">
		 function destroy() {
			 window.location.href=window.location.origin+"/controller/remove_session.php";
		 }

		 </script>
 </body>

 </html>
