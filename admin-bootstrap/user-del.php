
<?php
require_once("../lib/connection.php");
 
if (isset($_GET["id"])) {
	//Lây id được gửi qua từ bên quan-ly-thanh-vien.php
	$user_id = $_GET["id"];
	//Thực thi câu lệnh sql delete để xóa user
	$sql = "delete from user where user_id=$user_id";
	$query = mysqli_query($conn, $sql);
	//Chuyển hướng trang web về lại trang quan-ly-thanh-vien.php
	header('Location: user-list.php');
}

?>