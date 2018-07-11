
<?php
require_once("../lib/connection.php");
 ?>
<?php
    $id = -1;
    if (isset($_GET["id"])) {
        $id = intval($_GET['id']);
    }
    // Lấy ra nội dung bài viết theo điều kiện id
    $sql = "select * from news where news_id = $id";
    // Thực hiện truy vấn data thông qua hàm mysqli_query
    $query = mysqli_query($conn,$sql);
?>
<style>
    .top a {
  color: #28a745;
}
</style>

<div class="container" style="padding: 50px 0">
        <div class="row">
            <div class="col-lg-8">
                    <div class="tintuc-chitiet">
                            <?php 
                                    while ( $data = mysqli_fetch_array($query) ) {
                                ?>
                            <p class="top"><a href="tintuc.php">Tin tức</a> >> <a href=""><?php if ($data["cate_id"]=='c1') {
                                echo 'Tin nông nghiệp';} if ($data["cate_id"]=='c2') {
                                echo 'Bạn nhà nông';} if ($data["cate_id"]=='c3') {
                                echo 'Kiến thức về xoài';} ?></a> >> <?php echo $data["title"]; ?></p>
                            <h4 style="font-size: 20px; font-weight: bold;"><?php echo $data["title"]; ?></h4>
                            <small class="text-muted"><?php $data["date_news"] ?></small>
                            <p style="color: #444"><b><?php echo $data["introduce"] ?></b></p>
                            <p><?php echo $data["content"]; ?></p>
                                <?php } mysqli_close($conn);?>
                            <div class="fb-like" data-href="http://localhost/XoaiCL/php/about.php" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                            <div class="fb-comments" data-href="https://developers.facebook.com/docs/plugins/comments#configurator" data-width="750" data-numposts="5"></div>            
                        </div>
                        <div class="tinlq">
                            <h4>TIN TỨC LIÊN QUAN</h4>
                            <div class="row">
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="card" >
                                            <img class="card-img-top" src="../img/spxoai/photo.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                <a href="#"><h6 class="card-title">Lao Động Nông Nghiệp: Số Lượng Lớn, Chất Lượng </h6></a>
                                                    <p class="card-text">Trong 10 năm qua, đã có 15 triệu lao động có việc làm, trong đó, khoảng 50% làm trong lĩnh vực </p>
                                                <a href="chitiet-tintuc.php" class="btn btn-primary">Chi tiet</a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="card" >
                                            <img class="card-img-top" src="../img/spxoai/photo.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">gia</p>
                                                <a href="#" class="btn btn-primary">Chi tiet</a>
                                            </div>
                                        </div>
                                    </div>  
                                    <div class="col-lg-4 col-sm-6">
                                        <div class="card" >
                                            <img class="card-img-top" src="../img/spxoai/photo.jpg" alt="Card image cap">
                                            <div class="card-body">
                                                    <h5 class="card-title">Card title</h5>
                                                    <p class="card-text">gia</p>
                                                <a href="#" class="btn btn-primary">Chi tiet</a>
                                            </div>
                                        </div>
                                    </div>  
                            </div>
                        </div>
            </div>
            <div class="col-lg-4">
                <?php include "module/tintuc-right.php" ?>
            </div>
        </div>
    </div>