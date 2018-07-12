<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
  $data=$_GET['data'];
  include_once('db/db_conn.php');
  $sql="select * from phongban where idpb='".$data."'";
  $result=mysqli_query($link,$sql);
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Chỉnh sửa</title>
    <link rel="stylesheet" href="library/css/bootstrap.css">
  </head>
  <h1 class="text-success"><center> Thông tin phòng ban </center></h1>
  <div class="row">
    <div class="col-md-2">
    </div>
    <div class="col-md-5  form-group">
      <input type="search" id="search" name="search" placeholder="Search" size="35">
      <button  class="btn btn-primary" type="button" name="button">Search</button>

    </div>
    <div class="col-md-2"></div>
    <!-- <span class="label label-primary">Chào <?php echo $_SESSION["username"] ?></span> -->
    <h2>Chào<span class="label label-primary"> <?php echo $_SESSION["username"] ?></span></h2>
    <a href="set_dang_xuat.php"><button type="button" class="btn btn-info"name="button">Đăng xuất</button></a>
  </div>
  <div class="row">
    <div class="col-md-2.5 ">
      <nav class="sidebar" >
      <ul class="list-group">
              <li >
                  <a href="index.php"class="font-weight-bold list-group-item item" >
                      <i class="fa fa-2x fa-home mr-4"></i>&nbsp;Thông tin phòng ban</a>
              </li>
              <li>
                  <a href="ttnv.php"class="font-weight-bold list-group-item  item">
                      <i class="fa fa-2x fa-tag mr-4"></i>&nbsp;Thông tin nhân viên</a>
              </li>
          </ul>
      </nav>
    </div>

    <?php $row=mysqli_fetch_assoc($result); ?>
      <div class="row">
        <div class="col-md-2">
        </div>
        <div class="col-md-8">
          <form class="form-group" action="chenttin.php" METHOD="GET">
              <strong><label for="username">Id Phòng ban:</label></strong>
            <input type="text" id="username"name="idpb" value= "<?php echo $row['idpb']; ?>" redonly disabled="true"><br>
              <strong><label for="firstname">Mô tả:</label></strong>
            <input type="text" id="firstname" name="mota" value="<?php echo $row['mota']; ?>" ><br>
              <strong><label for="lastname">Thời gian:</label></strong>
            <input type="text" id="lastname" name="thoigian" value= "<?php echo $row['thoigian']; ?>"><br>
            <input type="submit" value="submit" class="btn-success" >
            <a href="index.php"><input type="button" value="Trở lại" class="btn-primary"><br></a>
          </form>
        </div>
      </div>
  </body>
</html>
