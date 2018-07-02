
   <?php
session_start();
?>
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
<!DOCTYPE html>
<html lang="en">
<?php include "thuvien/head-admin.php" ?>

<body >
<?php include "modules/header-admin.php" ?>
<div class="content-wrapper">
	
		<div class="container-fluid" style="margin-top:50px;">
				<ol class="breadcrumb">
						<li class="breadcrumb-item">
						  <a href="#">Quản trị viên</a>
						</li>
						<li class="breadcrumb-item active">Thêm quản trị viên</li>
					  </ol>
						<div class="col-lg-8 offset-lg-2">
						<h3>  Thông tin quản trị viên</h3>	
							<form action='user-add.php' method='POST'>
								<div class="form-group">
									<label for="username">Tên đăng nhập</label>
									<input type="text" class="form-control" id="username" name="username" placeholder="Tên đăng nhập">
									<label for="password">Mật khẩu</label>
									<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
						
									<label for="email">Địa chỉ Email</label>
									<input type="email" class="form-control" id="email" name="email"placeholder="Email">
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

	<a class="scroll-to-top rounded" href="#page-top">
			<i class="fa fa-angle-up"></i>
		  </a>
		  <!-- Logout Modal-->
		  <?php include "modules/logout.php"?>
<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>