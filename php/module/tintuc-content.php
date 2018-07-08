
<div class="tintuc">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <h4 style="padding-top: 50px">TẤT CẢ TIN TỨC</h4>
            </div>
            <div class="col-lg-8 tintuc-nd ">
                <div class="row">
                    <?php
                     require_once("../lib/connection.php");
                      $sql = "select * from news ";
                  
                      $query = mysqli_query($conn,$sql);
                        // Khởi tạo biến đếm $i = 0
                        $i = 0;
                        // Lặp dữ liệu lấy data từ cơ sở dữ liệu
                        while ( $data = mysqli_fetch_array($query) ) {
  
                    ?>
                    <div class="col-lg-4 col-sm-6"> 
                        <div class="card" >
                            <img class="card-img-top" src="<?php $data["image"] ?>" alt="Card image cap">
                            <div class="card-body">
                                <a href="#"><h6 class="card-title"><?php echo $data["title"] ?></h6></a>
                                    <p style="line-height: 1.1;" class="card-text"><?php echo $data["introduce"] ?> </p>
                                <a href="chitiet-tintuc.php" class="btn btn-primary">Chi tiet</a>
                            </div>
                        </div>
                    </div>
                   <?php
                            $i++;
                        }
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include "tintuc-right.php" ?>
            </div> 
        </div>
    </div>
</div>