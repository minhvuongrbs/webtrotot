<?php
  $username=$_POST['username'];
  $firstname=$_POST['firstname'];
  $lastname=$_POST['lastname'];
  $password=$_POST['password'];
  include_once("db/db_conn.php");
  $sql="insert into admin1(username,firstname,lastname,password,role) values('$username','$firstname','$lastname','$password','0')";
  mysqli_query($link,$sql);
  header("location:login.php");
 ?>
