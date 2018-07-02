
    <!DOCTYPE html>
<html lang="en">
<?php include "../thuvien/head.php" ?>
<body>
<div class="container">
      <div class="row">
      	<?php
		    require_once("../lib/connection.php");

		    if (isset($_POST["save"])) {
                $id_user = $_POST["id_user"];
                $user = $_POST["user"];
                $pass = $_POST["pass"];
		    	$name = $_POST["name"];
		    	$email = $_POST["email"];
		    	$level = $_POST["level"];
		    	$sql = "INSERT INTO user VALUES id='$id_user',user = '$user', pass='$pass' username = '$name', email = '$email', level = '$level'";
		    	mysqli_query($conn, $sql);
		    }
		?>
        <h3>  thong tin thành viên</h3><br>
        <form method="POST" name="fr_update">
	        <table class="table">
                <tr><td>id : </td><td><input type="text" name="id_user" /></td></tr>
                <tr><td>Tên đăng nhập : </td><td><input type="text" name="user"  /></td></tr>
                <tr><td>Mật khẩu : </td><td><input type="text" name="pass"  /></td></tr>
	          	<tr><td>Họ tên : </td><td><input type="text" name="name" /></td></tr>
	          	<tr><td>Địa chỉ email : </td><td><input type="text" name="email" /></td></tr>
	          	<tr>
	          		<td>Cấp độ : </td>
	          		<td>
                      <select name="level">
	          				<option value="1" <?php echo ($level == 1)?"selected":""; ?>>Administrator</option>
	          				<option value="2" <?php echo ($level == 2)?"selected":""; ?>>Member</option>
	          			</select>
	          		</td>
	          	</tr>
	          	<tr><td colspan="2"><input type="submit" name="save" value="them thanh vien"></td></tr>
	        </table>
        </form>
      </div>

    </div>
<!-- ********** -->
<?php include "../thuvien/script.php" ?>
</body>
</html>
