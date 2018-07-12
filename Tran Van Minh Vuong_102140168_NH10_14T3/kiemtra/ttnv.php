<?php
  session_start();
  if(!isset($_SESSION['username'])){
    header("location:login.php");
  }
  include_once('db/db_conn.php');
  $sql="select * from nhanvien";
  $result=mysqli_query($link,$sql);
 ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="/library/css/bootstrap.css">

    </style>
    <script src="library/js/jquery-3.3.1.min.js">
    </script>
  </head>
  <body>
    <h1 class="text-success"><center> Thông tin nhân viên </center></h1>
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
      <div class="col-md-8 form-group" id="Detail">

      <table class='table table-striped list'>
      <tr><td>Id Nhân viên</td><td>Id Phòng ban</td><td>Họ tên</td><td>Địa chỉ</td><td>Thao tác</td></tr>
      <?php while($row=mysqli_fetch_array($result)){
         ?>
          <tr>
            <td><?php echo $row['idnv'] ?></td>
            <td><?php echo $row['idpb'] ?></td>
            <td><?php echo $row['HoTen'] ?></td>
            <td><?php echo $row['diachi'] ?></td>
            <td>
              <div class="row">
                <div class="col-md-7">
                  <form  action="xoa.php?data=<?php echo $row['idnv']; ?>" method="post">
                    <input name="delete" type="image" src="library/image/delete.png" width="20" height="20">
                  </form>
                </div>
              </div>
             </td>
          </tr>
      <?php } ?>
      </table>
      </div>
      <div class="col-md-2">
      </div>
    </div>
  </body>
</html>
<script type="text/javascript">
  $(document).ready(function(){
    $('#search').keyup(function () {
      var dataSearch=$(this).val();
      $.ajax({
        type: "GET",
        url: "searchnv.php",
        data: {dataSearch:dataSearch},
        success: function (response) {
          $('#Detail').html(response).show();
          }
      });
    });
  });
</script>
