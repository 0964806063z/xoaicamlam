<?php
session_start();

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
                <li class="breadcrumb-item active">Danh sách tin tức</li>
            </ol>
            <br>
            <div class="card mb-3">
                <div class="card-header">
                    <i class="fa fa-table"></i> Danh sách tin tức</div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th style="width: 40%;">Tiêu đề</th>
                                    <th>Ngày đăng</th>
                                    <th>Chuyên mục</th>
                                    <th>Thao tác</th>
                                </tr>
                            </thead>
                            <tfoot>
                                <tr>
                                    <th>Tiêu đề</th>
                                    <th>Ngày đăng</th>
                                    <th>Chuyên mục</th>
                                    <th>Thao tác</th>
                                </tr>
                            </tfoot>
                            <tbody>
                                <?php
                                  require_once("../lib/connection.php");
                                  $sql = "SELECT * FROM news";
                                  $query = mysqli_query($conn,$sql);
                                  while ($data = mysqli_fetch_array($query)) {
                                  ?>
                                    <tr>
                                        <td>
                                            <?php echo $data["title"]; ?>
                                        </td>
                                        <td>
                                            <?php echo $data["date_news"]; ?>
                                        </td>
                                        <td>
                                            <?php
                                                if ($data["cate_id"] == "c1") {
                                                  echo "Tin nông nghiệp";
                                                }
                                                if ($data["cate_id"] == "c2") {
                                                  echo "Chuyện nhà nông";
                                                }
                                                  if ($data["cate_id"] == "c3") {
                                                  echo "Kiến thức về xoài";
                                                }
                                            ?>
                                        </td>
                                        <td>
                                            <a href="news_edit.php?id=<?php echo $data[" news_id "]; ?>"> Sửa</a> |<a href="#exampleModal1" data-toggle='modal' data-target='#exampleModal1'> Xóa</a>
                                            <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel1" aria-hidden="true">
                                                <div class="modal-dialog" role="document">
                                                    <div class="modal-content">
                                                        <div class="modal-header">
                                                            <h5 class="modal-title" id="exampleModalLabel1">Bạn muốn Xóa dữ liệu này không?</h5>
                                                            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                                                <span aria-hidden="true">×</span>
                                                            </button>
                                                        </div>
                                                        <div class="modal-body">Chọn "Xóa" để về xóa dữ liệu</div>
                                                        <div class="modal-footer">
                                                            <button class="btn btn-secondary" type="button" data-dismiss="modal">Không</button>
                                                            <a class="btn btn-primary" href="news_del.php?id=<?php echo $data["news_id"]; ?>">Xóa</a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <?php
                                        }
                                    ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ********** -->
    <?php include "../php/thuvien/script.php" ?>
</body>

</html>