<?php
session_start();
$username = $_POST["username"];
$password = $_POST["password"];

$sql="select *from admin1 where username ='".$username."' and password ='".$password."'";
include_once('db/db_conn.php');
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);


	// Nếu thông tin đăng nhập chính xác, trả về giá trị là 1
	if ($username == $row['username'] && $password == $row['password']) {
		// session_register("username");
		// session_register('role');
		$_SESSION["username"]=$username;
		$_SESSION['role']=$row['role'];
		echo 1;
	   exit();
	}

	// Nếu thông tin đăng nhập sai, trả về giá trị là 0
	echo 0;
	exit();
?>
