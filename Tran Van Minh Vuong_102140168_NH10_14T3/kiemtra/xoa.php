<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
  include_once('db/db_conn.php');
    $idnv=$_GET['data'];
    $sql="delete from nhanvien WHERE idnv='".$idnv."'" ;
    $result=mysqli_query($link,$sql);
    header('location:index.php');
 ?>
