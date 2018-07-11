<?php
session_start();

?>
<?php 
	$loi=$mes=$loifile=null;
	if (isset($_POST["save"])) {
		$cate_id=$_POST["cate"];
		$title = $_POST["title"];
		$content = $_POST["post_content"];
		$introduce=$_POST["introduce"];
		
         if (isset($_FILES['image']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['image']['error'] > 0)
            {
                $loifile='*File bị lỗi';
            }
            else{
                $image=$_FILES['image']['name'];
                // Upload file
                move_uploaded_file($_FILES['image']['tmp_name'], '../img/news/'.$_FILES['image']['name']);
               
            }
        }
		if($title =="" || $content=="" || $introduce=="" ){
			$loi= '*Vui lòng nhập đầy đủ thông tin bài viết';
		}
		else {
			require_once("../lib/connection.php");
			$sql="INSERT INTO `news`(`news_id`, `title`, `images`, `introduce`, `content`, `date_news`, `cate_id`) VALUES ('null', '$title','$image','$introduce','$content',now(),'$cate_id')";
			mysqli_query($conn,$sql);
			$mes= 'Thêm thành công';
		}

	}
?>

<!DOCTYPE html>
<html lang="en">
<?php include "thuvien/head-admin.php" ?>

    
    <div id="content" class="admin content-wrapper" style="margin-top:50px;">
        <div class="container-fluid">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="#">Tin tức</a>
                </li>
                <li class="breadcrumb-item active">Thêm tin tức</li>
            </ol>
            <br>
            <form action='news_add.php' method='POST' enctype="multipart/form-data">
            	<div style="color: red; text-align: center;font-weight: 900;"><?php echo $loi; ?> <?php echo $mes; ?></div>
                <div class="form-group">
                    <div class="form-group">
                        <label for="title">Tiêu đề</label>
                        <input type="text" class="form-control" name="title" id="tilte" placeholder="Tiêu đề">
                    </div>
                    <div class="form-group">
                        <label for="cate">Chuyên mục</label>
                        <select class="form-control" id="cate" name="cate">
                            <option value="c1">Tin nông nghiệp</option>
                            <option value="c2">Chuyện nhà nông</option>
                            <option value="c3">Kiến thức nông nghiệp</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="introduce">Mô tả</label>
                        <textarea type="text" class="form-control" name="introduce" id="introduce"  rows="3"></textarea>
                    </div>
                    <div class="form-group">
                        <label for="image">Ảnh minh họa</label>
                        <input  type="file" class="form-control-file" name="image" id="image" >
                    </div>
                    <div class="form-group">
                        <label for="content">Nội dung</label>
                        <textarea class="form-control" id="contten"  name="post_content" rows="10"></textarea>
                    </div>
                    <button class="btn btn-primary" type="submit" name="save">Thêm tin tức</button>
                </div>
      
            </form>
        </div>

</div>
    <!-- ********** -->
    <script src="ckeditor/ckeditor.js"></script>
    <script>
    CKEDITOR.replace( 'post_content' );
</script>
    <?php include "../php/thuvien/script.php" ?>
</body>

</html>