<?php
session_start();
?>
<?php
	require_once("../lib/connection.php");
	$loi["save"]=$mes["save"]=NULL;
	if (isset($_POST["save"])) {
		$username = $_POST["username"];
		$password = $_POST["password"];
		$name = $_POST["name"];
		$level = $_POST["level"];
		$email = $_POST["email"];
		$is_block = 0;
		if (isset($_POST["is_block"])) {
			$is_block = $_POST["is_block"];
		}
		if ($username == "" || $password == "" || $name == "" || $email == "") {
			$loi["save"]="*Vui lòng nhập đầy đủ thông tin!";
		}
		else{
			$sql = "INSERT INTO `user`(`user_id`, `username`, `pass`, `name`, `email`, `level`,`block`) VALUES ('NULL','$username','$password','$name','$email','$level','$is_block')";
			mysqli_query($conn,$sql);
			$mes["save"]="Đã thêm thành công!";
		}
	}
?>
<!DOCTYPE html>
<html lang="en">
<?php include "thuvien/head-admin.php" ?>

<div id="content" class="admin">
    <div class="container-fluid" style="margin-top: 100px;">
				<div class="row">
					<div class="col-lg-4 offset-lg-4">
					<h3>  Thông tin quản trị viên</h3><br>
						<form action='user-add.php' method='POST'>
							<div class="form-group">
								<label for="username">Tên đăng nhập</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập">
								
								<label for="password">Mật khẩu</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
								
								<label for="name">HO TEN</label>
								<input type="text" class="form-control" id="name" name="name"placeholder="name">
								
								<label for="email">Địa chỉ Email</label>
								<input type="email" class="form-control" id="email" name="email"placeholder="email">
								
								<label for="level">Cấp độ</label>
								<select id="level" name="level" class="form-control">
									<option value="1" >Administrator</option>
									<option value="2" >Mod</option>
								</select>
								<div class="form-group form-check">
								    <input type="checkbox" class="form-check-input" name="is_block" id="exampleCheck1">
								    <label class="form-check-label" for="exampleCheck1">Check me out</label>
								 </div>
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
<!-- ********** -->
<?php include "thuvien/js.php" ?>
</body>
</html>