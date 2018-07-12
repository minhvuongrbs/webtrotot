<?php
  include_once("db/db_connect.php");
  if(isset($_GET['dataSearch'])){
    $keyword=trim($_GET['dataSearch']);
  }
  $sql="select name,type,rate,post_rooms.address,post_rooms.created_at from post_rooms inner join users on post_rooms.user_id=users.id where rate like '%$keyword%' or name like '%$keyword%' or post_rooms.address like '%$keyword%' or description like '%$keyword%' or type like '%$keyword%' or roomname like '%$keyword%' order by created_at desc";
  $result=mysqli_query($link,$sql);
  ?>
  <?php while($row=mysqli_fetch_assoc($result)){ ?>
  <li class= "timeline-inverted" id="itemList" onclick="clickItem(<?php echo $row['id'] ?>)">

    <div class="timeline-panel" >

      <div class="timeline-body">
        <p class="last mb-1">
        Phòng trọ <strong><?php echo $row['name'] ?></strong> cho thuê phòng<strong>&nbsp;<?php echo $row['type'] ?></strong></p>
        <p>
        <span>Giá :</span> <?php echo $row['rate'] ?> <span>VND</span>
        </p>
        <p>
          <span>Địa chỉ :</span> <?php echo $row['address'] ?>
        </p>
      </div>

      <div class="timeline-heading">
        <p><small class="text-muted"><i class="fa fa-clock-o"></i>&nbsp;<?php echo $row['created_at'] ?></small></p>
      </div>
    </div>
  </li>
  <?php } ?>
    <?php
    // echo $sql;
    exit();
      ?>
