
 <?php
session_start();
?> 
<?php
	require_once("../lib/connection.php");
		$id = -1;
		if (isset($_GET['id'])) {
			$id = $_GET['id'];
		}
		$sql = "SELECT * FROM user WHERE  user_id = $id ";
		$query = mysqli_query($conn,$sql);
?>
<!DOCTYPE html>
<html lang="en">
<?php include "thuvien/head-admin.php" ?>

<div id="content" class="admin content-wrapper"style="margin-top:50px;">
    <div class="container-fluid">
	<?php  echo "<h3>SỬA THÔNG TIN: ".$_SESSION["username"]."</h3>";?>
					<br>
		<form action='user-edit.php' method='POST'>
		    <div class="form-group">
		        <label for="password">Mật khẩu</label>
		        <input type="password" class="form-control" id="password" name="password" placeholder="Mật khẩu">
		        <label for="name">Họ tên</label>
		        <input type="text" class="form-control" id="name" name="name" placeholder="name" value="<?php echo $data['name'] ?>">
		        <label for="email">Địa chỉ Email</label>
		        <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo $data['email'] ?>">
		        <label for="level">Cấp độ</label>
		        <select id="level" name="level" class="form-control">
		            <option value="1">Administrator</option>
		            <option value="2">Mod</option>
		        </select>
		        <div class="form-group form-check">
		            <input type="checkbox" class="form-check-input" name="is_block" id="exampleCheck1" value="<?php echo $data['block'] ?>">
		            <label class="form-check-label" for="exampleCheck1">Khóa tài khoản</label>
		        </div>
		        <button class="btn btn-primary" type="submit" name="save">Thêm </button>
		    </div>
		</form>
	</div>
</div>

<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>

  