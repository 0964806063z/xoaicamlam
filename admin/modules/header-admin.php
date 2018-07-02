<div class="header-admin">
    <div class="container">
        <div class="row">
            <h1>ADMIN page </h1>
            <div style="text-align: right;">
               <?php
                   if (isset($_SESSION["username"])){
                       echo "Xin chào ".$_SESSION["username"]."<a href='logout.php'> (Đăng xuất)</a>";
                   }
                   else{
                       echo "<a href='#'> Đăng nhập</a>";
                   }
                ?>
            </div>
        </div>
    </div>
</div>