              
                <div class="card" style="width: 18rem;">
                    <div class="list-group list-group-flush">
                        <a class="list-group-item" href="tintuc-list.php?id=tin-nong-nghiep">Tin nông nghiệp</a>
                        <a class="list-group-item" href="tintuc-list.php?id=c2">Chuyện nhà nông</a>
                        <a class="list-group-item" href="tintuc-list.php?id=c3">Tin tức về xoài</a>

                    </div>
                </div>
         
                <div class="tintuc-hot">
                    <h4 style="text-align: left,">TIN TỨC</h4>
                     <?php
                      $sql = "select * from news order by news_id desc LIMIT 4";
                  
                      $query = mysqli_query($conn,$sql);
                    
                        while ( $data = mysqli_fetch_array($query) ) {
  
                    ?>
                        <div class="row card-tthot">
                            <div class="col-lg-12">
                                <a style="text-align: center;" href="chitiet-tintuc.php?id=<?php echo $data['news_id']; ?>">
                                    <img style="height: 100px; " class="rounded"  src="../img/news/<?php echo $data['images'] ?>" alt="">
                                </a>
                            </div>
                            <div class="col-lg-12">
                                <a href="chitiet-tintuc.php?id=<?php echo $data['news_id']; ?>">
                                    <h6><?php echo substr($data["title"], 0, 200)." ..." ?></h6>
                                </a> 
                                <p><?php echo substr($data["introduce"], 0, 235)." ..." ?></p>                            
                            </div>
                        </div>
                     <?php } mysqli_close($conn);?>
               
                </div>
                