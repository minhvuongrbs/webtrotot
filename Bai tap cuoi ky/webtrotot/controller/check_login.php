<?php
include_once("../db/db_connect.php");
$username = $_POST["username"];
$password = $_POST["password"];

$sql="select *from users where username ='".$username."' and password ='".$password."'";
$result=mysqli_query($link,$sql);
$row=mysqli_fetch_assoc($result);

	if ($username == $row['username'] && $password == $row['password']) {
		$_SESSION["username"]=$username;
    $_SESSION["id"]=$row['id'];
		// $_SESSION["image"]=$row['image'];
		// $_SESSION["image"]=$row['name'];
		echo 1;
	   exit();
	}
	echo 0;
	exit();
?>
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                              
