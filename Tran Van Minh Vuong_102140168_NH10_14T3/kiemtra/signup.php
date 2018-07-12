
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="library/css/bootstrap.css">
    <style media="screen">
    form{
      margin: 0 auto;
      padding: 20px;
      padding-left: 40px;
      width: 440px;
      border: 1px solid black;
    }
    </style>
  </head>
  <body>
    <h1 align="center">Đăng ký</h1>
    <form class="form-group" action="check_dang_ky.php" method="post">
      <label >Firstname</label><input type="text" name="firstname"placeholder="firstname" ><br>
      <label >Lastname</label><input type="text" name="lastname"placeholder="lastname" ><br>
      <label >Username</label><input type="text" name="username"placeholder="username" ><br>
      <label >Password</label><input type="password" name="password"  placeholder="password"><br>
      <button type="submit" name="register" class="btn btn-success">Đăng ký</button>
      <a href="login.php"><button type="submit" name="register" class="btn btn-primary">Trở lại</button></a>
    </form>
  </body>
</html>
