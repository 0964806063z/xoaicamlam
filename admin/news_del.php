
<?php
require_once("../lib/connection.php");
 
if (isset($_GET["id"])) {
	$id = $_GET["id"];
	$sql = "delete from news where news_id = $id";
	$query = mysqli_query($conn, $sql);
	header('Location: news_list.php');
	exit();
}
 
 
?>
