<section style="min-height: 85vh">
    <div class="header group">
        <div class="logo">
            <a href="index.php">
                <img src="view/img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-headegir" style="position: relative; left: 162px; top: 1px;">
                <form class="input-search" method="post" action="index.php?act=timkiem">
                    <input name="kyw" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                </form> <!-- End Form search -->

                <div class="tags">
                    <strong>Từ khóa: </strong>
                    <?php
                    foreach ($dsdm_header as $dm) {
                        extract($dm);
                        $linkdm = "index.php?act=dssanpham&iddm=" . $id;
                        echo '<a href="' . $linkdm . '">' . $name . '</a>';
                    }
                    ?>
                </div>
            </div> <!-- End Search header -->

            <div class="tools-member">
                <div class="member">
                    <a>
                        <i class="fa fa-user"></i>Tài khoản</a>
                    <div class="menuMember">
                        <a href="index.php?act=nguoidung">Trang người dùng</a>
                        <a>Đăng xuất</a>
                    </div>

                </div> <!-- End Member -->

                <div class="cart">
                    <a href="index.php?act=giohang">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->
            </div>
            <!-- End Tools Member -->
        </div>
    </div> <!-- End Content -->