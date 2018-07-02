<?php
session_start();
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
        <h3> Quản lý quản trị viên</h3>
        <table class="table">
          <caption>Danh sách quản trị viên</caption>
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên đăng nhập</th>
              <th>Mật khẩu</th>
              <th>Địa chỉ email</th>
              <th>Cấp độ</th>
              <th>Hành động</td>
            </tr>
          </thead>
          <tbody>
          <?php
            require_once("connection.php");
            $stt = 1 ;
            $sql = "SELECT * FROM user";
            // thực thi câu $sql với biến conn lấy từ file connection.php
           
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
              ?>
                <tr>
                  <th scope="row"><?php echo $stt++ ?></th>
                  <td><?php echo $data["username"]; ?></td>
                  <td><?php echo $data["pass"]; ?></td>
                  <td><?php echo $data["email"]; ?></td>
                  <td>
                    <?php
                        if ($data["level"] == "1") {
                          echo "Administrator";
                        }else{
                          echo "Mod";
                        }
                    ?>
                  </td>
                  <td><a href="user-edit.php?username=<?php echo $data["username"]; ?>"> Sửa</a><?php if($data["level"]==2){echo " | <a href='user-del.php?id=".$data["iduser"]."'>Xóa</a>";} ?></td>
                </tr>
              <?php
                }
              ?>
          </tbody>
        </table>

    </div>
</div>

<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>

  