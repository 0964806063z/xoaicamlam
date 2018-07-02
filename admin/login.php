<?php
session_start();
?>
<?php 
//Gọi file connection.php ở bài trước
require_once("connection.php");
  // Kiểm tra nếu người dùng đã ân nút đăng nhập thì mới xử lý
  $username=$password=NULL;
  $loi["login"]=$loi["nhap"]=NULL;
if (isset($_POST["ok"])) {
	// lấy thông tin người dùng
	$username = $_POST["username"];
	$password = $_POST["password"];
	//làm sạch thông tin, xóa bỏ các tag html, ký tự đặc biệt 
	//mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
	$username = strip_tags($username);
	$username = addslashes($username);
	$password = strip_tags($password);
	$password = addslashes($password);
	if ($username == "" || $password =="") {
		$loi["nhap"]= "* Tên tài khoản và mật khẩu bạn không được để trống!";
	}else{
		$sql = "select * from user where username = '$username' and pass = '$password' ";
		$query = mysqli_query($conn,$sql);
		$num_rows = mysqli_num_rows($query);
		if ($num_rows==0) {
			$loi["login"]= "* Tên đăng nhập hoặc mật khẩu không đúng !";
		}else{
			// Lấy ra thông tin người dùng và lưu vào session
			while ( $data = mysqli_fetch_array($query) ) {
	    	$_SESSION["iduser"] = $data["iduser"];
				$_SESSION['username'] = $data["username"]=$username;
				$_SESSION["name"] = $data["name"];
				$_SESSION["level"] = $data["level"];
				$_SESSION["email"] = $data["email"];
	    	}
			
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
			header('Location: admin.php');
		}
	}
}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "../php/thuvien/head.php" ?>
<body>

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
<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>