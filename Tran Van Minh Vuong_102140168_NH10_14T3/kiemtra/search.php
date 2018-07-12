<?php
include_once('db/db_conn.php');
  if(isset($_GET['dataSearch'])){
    $keyword=trim($_GET['dataSearch']);
  }
  $sql="select * from phongban where idpb like '%$keyword%' or mota like '%$keyword%' ";
  $result=mysqli_query($link,$sql);
  ?>
  <table class='table table-striped list'>
  <tr><td>Username</td><td>First name</td><td>Last name</td><td>Thao tác</td></tr>
  <?php while($row=mysqli_fetch_array($result)){
     ?>
      <tr>
        <td><?php echo $row['idpb'] ?></td>
        <td><?php echo $row['mota'] ?></td>
        <td><?php echo $row['thoigian'] ?></td>
        <td>
          <div class="row">
            <div class="col-md-3">
              <form   action="chinhsua.php?data=<?php echo $row['idpb'] ?>" method="post">
                <input type="image" src="library/image/settings.png" width="20" height="20">
              </form>
            </div>
            <div class="colmd-1">
              <form  action="xoa.php?data=<?php echo $row['idpb']; ?>" method="post">
                <input name="delete" type="image" src="library/image/delete.png" width="20" height="20">
              </form>
            </div>
          </div>
         </td>
      </tr>
  <?php } ?>
  </table>
    <?php
    // echo $sql;
    exit();
      ?>
