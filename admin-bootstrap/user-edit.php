
   <?php
session_start();
?>
<?php
			require_once("connection.php");
			$loi["save"]=$mes["save"]=NULL;
			if (isset($_POST["save"])) {
				$password = $_POST["password"];
				$level = $_POST["level"];
				$email = $_POST["email"];
				if ($password == "" || $level == "" || $email == "") {
					$loi["save"]="*Vui lòng nhập đầy đủ thông tin!";
				}
				else{
                    $id = $_GET["id"];
                    if (isset($_GET["id"])){
                        $sql = "update user set pass='$password', email = '$email', level = '$level' where iduser = $id";
                        mysqli_query($conn,$sql);
                        $mes["save"]="Đã sửa thành công!";
                    }
				
				}
			}
		?>
<!DOCTYPE html>
<html lang="en">
<?php include "thuvien/head-admin.php" ?>

<body >
<div id="header">
<?php include "modules/header-admin.php" ?>
</div>
<div id="content" class="admin content-wrapper"style="margin-top:50px;">
    <div class="container-fluid">
	<?php  echo "<h3>SỬA THÔNG TIN: ".$_SESSION["username"]."</h3>";?>
					<br>
						<form action='user-edit.php' method='POST'>
							<div class="form-group">
								<label for="password">Mật khẩu</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
					
								<label for="email">Địa chỉ Email</label>
								<input type="email" class="form-control" id="email" name="email"placeholder="Mật khẩu">
								<label for="level">Cấp độ</label>
								<select id="level" name="level" class="form-control">
									<option value="1" >Administrator</option>
									<option value="2" >Mod</option>
								</select>
								<button class="btn btn-primary" type="submit" name="save">Sửa </button>
								<?php
									echo $loi["save"];
									echo $mes["save"];
								?>
							</div>
						</form>
    </div>
</div>

<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>

  