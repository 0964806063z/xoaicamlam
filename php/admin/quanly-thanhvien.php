<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<?php include "../php/thuvien/head.php" ?>

<body >
<div id="header">
<?php include "modules/header-admin.php" ?>
</div>
<div id="content" class="admin">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3">
                <ul style="list-style: none;"><h3><i class="fas fa-shopping-cart"></i> Đơn hàng</h3>
                    <li><a href="#"><i class="fas fa-table"></i> Danh sách đơn hàng</a></li>
                </ul>   
                <ul style="list-style: none;"><h3>Thành viên</h3>
                    <li><a href="#"><i class="fas fa-table"></i> Danh sách hành viên</a></li>
                    <li><a href="#"><i class="fas fa-user-plus"></i> Thêm thành viên</a></li>
                </ul>
                <ul style="list-style: none;"><h3><i class="fas fa-shopping-cart"></i>Sản phẩm</h3>
                    <li><a href="#"><i class="fas fa-table"></i> Danh sách Sản phẩm</a></li>
                    <li><a href="#"><i class="fas fa-cart-plus"></i> Thêm sản phẩm</a></li>
                    <li><a href="#"><i class="fas fa-cart-plus"></i> Cập nhật sản phẩm</a></li>
                </ul>  
                <ul style="list-style: none;"><h3><i class="fas fa-newspaper"></i>Tin tức</h3>
                    <li><a href="#"><i class="fas fa-table"></i> Danh sách Tin tức</a></li>
                    <li><a href="#"><i class="fas fa-newspaper"></i>Thêm tin tức</a></li>
                </ul>  
                <ul style="list-style: none;"><h3><i class="fas fa-phone"></i>Liên hệ</h3>
                    <li><a href="#"><i class="fas fa-table"></i> Danh sách liên hệ</a></li>
                </ul>        
            </div>
            <div class="col-lg-9">
            <h3> Quản lý thành viên</h3>
        <table class="table">
          <caption>Danh sách thành viên đã đăng ký</caption>
          <thead>
            <tr>
              <th>STT</th>
              <th>Tên đăng nhập</th>
              <th>Họ tên</th>
              <th>Địa chỉ email</th>
              <th>Cấp độ</th>
              <th>Hành động</td>
            </tr>
          </thead>
          <tbody>
          <?php
            require_once("../connection.php");
            $stt = 1 ;
            $sql = "SELECT * FROM user";
            // thực thi câu $sql với biến conn lấy từ file connection.php
            $query = mysqli_query($conn,$sql);
            while ($data = mysqli_fetch_array($query)) {
          ?>
            <tr>
              <th scope="row"><?php echo $stt++ ?></th>
              <td><?php echo $data["user"]; ?></td>
              <td><?php echo $data["username"]; ?></td>
              <td><?php echo $data["email"]; ?></td>
              <td>
                <?php
                    if ($data["level"] == "admin") {
                      echo "Administrator";
                    }else{
                      echo "Member";
                    }
                ?>
              </td>
              <td><a href="chinh-sua-thanh-vien.php?id=<?php echo $data["iduser"]; ?>">Sửa</a> <a href="xoa-thanh-vien.php?id=<?php echo $data["id"]; ?>">Xóa</a></td>
            </tr>
          <?php
            }
          ?>
          </tbody>
        </table>
        <a href="them-thanh-vien.php">them thanh vien</a>
            </div>
        </div>
    </div>
</div>
<div id="footer">

<!-- ********** -->
<?php include "../php/thuvien/script.php" ?>
</body>
</html>

  
