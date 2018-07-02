<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" id="mainNav">
    <a class="navbar-brand" href="admin.php">ADMIN PAGE</a>
    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarResponsive">
      <ul class="navbar-nav navbar-sidenav" id="exampleAccordion">
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Dashboard">
          <a class="nav-link" href="admin.php">
            <i class="fa fa-fw fa-dashboard"></i>
            <span class="nav-link-text">Dashboard</span>
          </a>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Components">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#collapseComponents" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-wrench"></i>
            <span class="nav-link-text">ĐƠN HÀNG</span>
          </a>
          <ul class="sidenav-second-level collapse" id="collapseComponents">
            <li>
              <a href="navbar.html">Danh sách đơn hàng</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Example Pages">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#user" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-file"></i>
            <span class="nav-link-text">QUẢN TRỊ VIÊN</span>
          </a>
          <ul class="sidenav-second-level collapse" id="user">
            <li>
              <a href="user-list.php">Danh sách quản trị viên</a>
            </li>
            <li>
              <a href="user-add.php">Thêm quản trị viên</a>
            </li>

          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Sản Phẩm">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#sp" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Sản Phẩm</span>
          </a>
          <ul class="sidenav-second-level collapse" id="sp">
            <li>
              <a href="#">Danh sách sản phẩm</a>
            </li>
            <li>
              <a href="#">Thêm sản phẩm</a>
            </li>
            <li>
              <a href="#">Cập nhật sản phẩm</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Tin tức">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#tt" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Tin tức</span>
          </a>
          <ul class="sidenav-second-level collapse" id="tt">
            <li>
              <a href="#">Danh sách Tin tức</a>
            </li>
            <li>
              <a href="#">Thêm Tin tức</a>
            </li>
          </ul>
        </li>
        <li class="nav-item" data-toggle="tooltip" data-placement="right" title="Liên hệ">
          <a class="nav-link nav-link-collapse collapsed" data-toggle="collapse" href="#ct" data-parent="#exampleAccordion">
            <i class="fa fa-fw fa-sitemap"></i>
            <span class="nav-link-text">Liên hệ</span>
          </a>
          <ul class="sidenav-second-level collapse" id="ct">
            <li>
              <a href="#">Danh sách liên hệ</a>
            </li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav sidenav-toggler">
        <li class="nav-item">
          <a class="nav-link text-center" id="sidenavToggler">
            <i class="fa fa-fw fa-angle-left"></i>
          </a>
        </li>
      </ul>
        <?php
                   if (isset($_SESSION["username"])){
                       echo "Xin chào ".$_SESSION["username"]."<ul class='navbar-nav ml-auto'> 
                                                                <li class='nav-item'>
                                                                  <a class='nav-link' data-toggle='modal' data-target='#exampleModal'>
                                                                    <i class='fa fa-fw fa-sign-out'></i>Logout</a>
                                                                </li>
                                                              </ul>";
                    }
                   else{
                       echo "<ul class='navbar-nav ml-auto'> 
                       <li class='nav-item'>
                         <a class='nav-link' data-toggle='modal' data-target='#exampleModal'>
                           <i class='fa fa-fw fa-sign-out'></i>Logout</a>
                       </li>
                     </ul>";
                   }
                ?>
   
    </div>
  </nav>