
<?php
require_once("../lib/connection.php");
 
if (isset($_GET["id"])) {
	//Lây id được gửi qua từ bên quan-ly-thanh-vien.php
	$id = $_GET["id"];
	//Thực thi câu lệnh sql delete để xóa user

		$sql = "delete from user where iduser = $id and level=2";
		$query = mysqli_query($conn, $sql);
		//Chuyển hướng trang web về lại trang quan-ly-thanh-vien.php
		header('Location: quanly-thanhvien.php');

}
 
 
?>