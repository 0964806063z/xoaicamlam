<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    </head>
<body>
    <form method="post" action="test.php" >
         <div class="form-group">
                        <label for="image">Ảnh minh họa</label>
                        <input  type="file" class="form-control-file" name="image" id="image" >
                    </div>
        <input type="submit" name="uploadclick" value="Upload"/>
    </form>
    <?php // Xử Lý Upload
  
    // Nếu người dùng click Upload
    if (isset($_POST['uploadclick']))
    {
        // Nếu người dùng có chọn file để upload
        if (isset($_FILES['image']))
        {
            // Nếu file upload không bị lỗi,
            // Tức là thuộc tính error > 0
            if ($_FILES['image']['error'] > 0)
            {
                echo 'File Upload Bị Lỗi';
            }
            else{
                // Upload file
                move_uploaded_file($_FILES['image']['tmp_name'], '../img/news/'.$_FILES['image']['name']);
                echo 'File Uploaded';
            }
        }
        else{
            echo 'Bạn chưa chọn file upload';
        }
    }
?>
</body>
</html>