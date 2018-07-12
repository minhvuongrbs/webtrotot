<?php
  include_once("../db/db_connect.php");
  $user_id=$_SESSION['id'];
  $address=$_POST['address'];
  $phone=$_POST['phone'];
  $rate=$_POST['rate'];
  $type=$_POST['type'];
  $roomname=$_POST['roomname'];
  $path="library/image/room.jpg";
   $created_at=date('Y-m-d H:i:s');
   $description=$_POST['description'];
   $longitude=$_POST['longitude'];
   $latitude=$_POST['latitude'];
  $sql="insert into post_rooms(user_id,`address`, `phone`, `rate`, `type`, `roomname`, `description`, `longitude`,`latitude`,created_at) VALUES ('$user_id','$address','$phone','$rate','$type','$roomname','$description','$longitude','$latitude','$created_at')";
  // $sql="insert into gallery_post_rooms(post_room_id,path,created_at,created_at) values()"
  mysqli_query($link,$sql);
  // echo $sql;
  header("location:../screenqlpt_danhsachbaidang.php");
 ?>
