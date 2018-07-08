
<div class="htintuc">
    <div class="container">
        <h2>TIN TỨC</h2>
        <div class="row">
            <?php
                     require_once("../lib/connection.php");
                      $sql = "select * from news LIMIT 4";
                  
                      $query = mysqli_query($conn,$sql);
                        $i = 0;
                        while ( $data = mysqli_fetch_array($query) ) {
  
                    ?>
            <div class="col-lg-6">
                <div class="container">
                    <div class="row card-tt">
                        <div class="col-lg-4">
                            <a href="#">
                                <img class="rounded float-left img-thumbnail"  src="<?php $data["image"] ?>" alt="">
                             </a>
                        </div>
                         <div class="col-lg-8">
                            <a href="#">
                                <h3><?php echo $data["title"] ?></h3>
                            </a>  
                            <p><?php echo $data["introduce"] ?> </p>
                            <div class="float-right"> 
                                <button href="chitiet-tintuc.php" class="btn btn-primary">Chi tiết</button>
                            </div>
                        </div>
                    </div>
                </div>           
            </div>
              <?php
                            $i++;
                        }
                    ?>
        </div>
    </div>
</div>