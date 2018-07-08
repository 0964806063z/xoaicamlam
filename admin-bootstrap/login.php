<?php
session_start();
?>
<?php 
require_once("../lib/connection.php");
  $username=$password=NULL;
  $loi["login"]=$loi["nhap"]=NULL;
if (isset($_POST["ok"])) {
	$username = $_POST["username"];
	$password = $_POST["password"];
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		$loi["nhap"]= "* Tên tài khoản và mật khẩu bạn không được để trống!";
  }
  else{
		$sql = "select * from user where username = '$username' and pass = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			$loi["login"]= "* Tên đăng nhập hoặc mật khẩu không đúng !";
    }
    else{
			while ( $data = mysqli_fetch_array($query) ) {
	    	$_SESSION["iduser"] = $data["user_id"];
				$_SESSION['username'] = $data["username"]=$username;
				$_SESSION["name"] = $data["name"];
				$_SESSION["level"] = $data["level"];
				$_SESSION["email"] = $data["email"];
      }			
      header('Location: admin.php');
		}
	}
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Đăng nhập</title>
  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom fonts for this template-->
  <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
<div class="container">
    <div class="row">
        <div class="col-lg-6 offset-lg-3">
            <div class="card card-login mx-auto mt-5">
                <div class="card-header">Đăng nhập Admin</div>
                <div class="card-body">
                  <form action="login.php" method="POST">  
                    <div class="form-group">
                      <label for="username">Tài khoản</label>
                      <input class="form-control" type="text" id="username" name="username" placeholder="Nhập tài khoản">
                    </div>
                    <div class="form-group">
                      <label for="pass">Mật khẩu</label>
                      <input class="form-control" id="pass" name="password" type="password" placeholder="Nhập mật khẩu">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="ok">Đăng nhập</button>
                  </form>
                      <div>
                        <?php 
                          echo $loi["nhap"];
                          echo $loi["login"];
                        ?>
                      </div>
                </div>
           </div>
      </div>
    </div>
  </div>
  <?php include "thuvien/js.php" ?>
</body>

</html>
