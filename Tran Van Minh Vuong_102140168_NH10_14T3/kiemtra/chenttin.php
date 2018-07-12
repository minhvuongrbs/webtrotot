<?php
  session_start();
  $mota=$_GET['mota'];
  $thoigian=$_GET['thoigian'];
  $sql="update phongban set mota='".$mota."'where thoigian='".$thoigian."'";
  include_once('db/db_conn.php');
  $result=mysqli_query($link,$sql);
  if(!$result){
    header("location:capnhat.php");
  }else{
    header("location:index.php");
  }
 ?>
