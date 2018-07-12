<?php
$link=mysqli_connect('localhost','root','') or die ('fail'.mysqli_error());
mysqli_select_db($link,'webtrotot');
mysqli_set_charset($link,"utf8");
session_start();
 ?>
