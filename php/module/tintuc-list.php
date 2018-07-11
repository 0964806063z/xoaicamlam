

<div class="tintuc">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                 <h4 style="padding-top: 50px">TIN NÔNG NGHIỆP</h4>
            </div>
            <div class="col-lg-8 tintuc-nd ">
                <div class="row">
                    <?php
                        require_once("../lib/connection.php");
                      $sql = "select * from news where cate_id='c3' order by news_id desc ";
                  
                      $query = mysqli_query($conn,$sql);
                        $i = 0;
                        while ( $data = mysqli_fetch_array($query) ) {
  
                    ?>
                    <div class="col-lg-4 col-sm-6"> 
                        <div class="card" >
                            <img class="card-img-top" src="../img/news/<?php echo $data['images'] ?>" alt="Card image cap">
                            <div class="card-body">
                                <a href="chitiet-tintuc.php?id=<?php echo $data['news_id']; ?>"><h6 class="card-title"><?php echo $data["title"] ?></h6></a>
                                    <p style="line-height: 1.1;" class="card-text"><?php echo $data["introduce"] ?> </p>
                                <a href="chitiet-tintuc.php?id=<?php echo $data['news_id']; ?>" class="btn btn-primary">Chi tiet</a>
                            </div>
                        </div>
                    </div>
                   <?php
                            $i++;
                        }
                        mysqli_close($conn);
                    ?>
                </div>
            </div>
            <div class="col-lg-4">
                <?php include "tintuc-right.php" ?>
            </div> 
        </div>
    </div>
</div>