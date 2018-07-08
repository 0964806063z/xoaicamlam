
<div class="container " id="h-top">
    <div class="row h-top">
                    <?php
                        require_once("lib/connection.php");
                        $sql = "select * from nhomsp";
                        $query = mysqli_query($conn,$sql);
						// Khởi tạo biến đếm $i = 0
						$i = 0;
						// Lặp dữ liệu lấy data từ cơ sở dữ liệu
						while ( $data = mysqli_fetch_array($query) ) {
                    ?>
                    
                        <div class="col-lg-3 col-sm-6">
                            <div class="card" >
                                    <a href="chitietsp.php?id=<?php echo $data["manhom"]?>" style="text-align: center;">                        
                                            <img  src="../img/br1.jpg" alt="Card image cap">
                                            <p><h3> <?php echo $data["tennhom"]  ?></h3></p>
                                        </a>   
                                <div class="card-body">
                                    <p class="card-text"><?php echo $data["mota"] ?></p>
                                </div>
                            </div>
                        </div>  
					<?php
							$i++;
						}
					?>        
    </div>
    <div class="about row">
        <div class="col-lg-12">
        <h2>Về chúng tôi</h2>
        </div>
        <div class="col-lg-3">
            <a href="#"><img src="../img/team/4.jpg" alt="" class="img-thumbnail"></a>
        </div>
        <div class="col-lg-9">
                    <p> Cùng với sự phát triển của nền kinh tế, nhu cầu thực phẩm an toàn, bảo vệ sức khỏe đang được người tiêu dùng Việt Nam ngày càng quan tâm nhiều hơn. Bên cạnh đó, những sự kiện như rau “bẩn”, thực phẩm kém chất lượng, trái cây nhiễm độc, sự gia tăng của bệnh ung thư, v.v… đã đặt ra vấn đề cấp thiết về chất lượng và an toàn vệ sinh thực phẩm của người tiêu dùng.</p>
                    <p>Đáp ứng nhu cầu ngày càng tăng của người tiêu dùng Việt Nam về nông sản an toàn. Tạo kênh phân phối trực tiếp từ nhà sản xuất đến người tiêu dùng cuối cùng. Quảng bá sản phẩm nông sản an toàn Việt Nam.Liên kết dài hạn và đảm bảo đầu ra ổn định cho nhà sản xuất nông sản an toàn, góp phần vào sự nghiệp phát triển ngành nông nghiệp Việt Nam.</p> 
                    <p> HTX Nông nghiệp chọn con đường gắn bó với rau sạch Đà Lạt, bởi đây chính là thế mạnh, là hướng đi thuận lợi với những xã viên vốn là nông dân chuyên trồng rau. Hơn 70 ha đất của xã viên tham gia hợp tác xã được xác định trồng và cung cấp cho thị trường rau VietGAP mang thương hiệu Nông nghiệp.</p>
                    <p>Chủ trương khép kín quy trình sản xuất để rau đạt chuẩn VietGAP, HTX Nông nghiệp sản xuất giống rau trong vỉ xốp cung cấp cho xã viên đồng thời cung cấp những loại thuốc bảo vệ thực vật nằm trong danh mục. Sản phẩm sau thu hoạch, HTX sơ chế và bao tiêu toàn bộ cho xã viên. Bởi vậy, rau của Nông nghiệp là rau an toàn, HTX tự công bố chất lượng và được cơ quan kiểm dịch chứng nhận. </p>
        </div>
    </div>
</div>

