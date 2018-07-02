
   <?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../php/thuvien/head.php" ?>

<body >
<div id="header">
<?php include "modules/header-admin.php" ?>
</div>
<div id="content" class="admin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
				<?php include "modules/bar-admin.php" ?>
            </div>
            <div class="col-lg-9">
				<?php
					require_once("connection.php");
					$loi["save"]=$mes["save"]=NULL;
					if (isset($_POST["save"])) {
						//lấy thông tin từ các form bằng phương thức POST
						$username = $_POST["username"];
						$password = $_POST["password"];
						$level = $_POST["level"];
						$email = $_POST["email"];
						//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
						if ($username == "" || $password == "" || $level == "" || $email == "") {
							$loi["save"]="*Vui lòng nhập đầy đủ thông tin!";
						}
						else{
							$sql = "INSERT INTO `user`( `username`, `pass`, `level`, `email`) VALUES ('$username','$password','$level','$email')";
							// thực thi câu $sql với biến conn lấy từ file connection.php
							mysqli_query($conn,$sql);
							$mes["save"]="Đã thêm thành công!";
						}
					}
				?>
				<div class="row">
					<div class="col-lg-8 offset-lg-2">
					<h3>  Thông tin quản trị viên</h3><br>
						<form action='add-user.php' method='POST'>
							<div class="form-group">
								<label for="username">Tên đăng nhập</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập">
								<label for="password">Mật khẩu</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
					
								<label for="email">Địa chỉ Email</label>
								<input type="email" class="form-control" id="email" name="email"placeholder="Mật khẩu">
								<label for="level">Cấp độ</label>
								<select id="level" name="level" class="form-control">
									<option value="1" >Administrator</option>
									<option value="2" >Mod</option>
								</select>
								<button class="btn btn-primary" type="submit" name="save">Thêm </button>
								<?php
									echo $loi["save"];
									echo $mes["save"];
								?>
							</div>
						</form>
					</div>
				</div>
            </div>
        </div>
    </div>
</div>
<div id="footer">

<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>