<section style="min-height: 85vh">
    <div class="header group">
        <div class="logo">
            <a href="index.php">
                <img src="view/img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
            </a>
        </div> <!-- End Logo -->

        <div class="content">
            <div class="search-header" style="position: relative; left: 162px; top: 1px;">
                <form class="input-search" method="post" action="index.php?act=timkiem">
                    <!-- <div class="autocomplete"> -->
                    <input name="kyw" autocomplete="on" type="text" placeholder="Nhập từ khóa tìm kiếm...">
                    <input type="submit" name="timkiem" value="Tìm kiếm">
                    <!-- <i class="fa fa-search"></i>
                                Tìm kiếm
                            </button> -->
                    <!-- </div> -->
                </form> <!-- End Form search -->
                <div class="tags">
                    <strong>Từ khóa: </strong>
                    <!-- <a href="index.html?search=Samsung">Samsung</a>
                        <a href="index.html?search=iPhone">iPhone</a>
                        <a href="index.html?search=Huawei">Huawei</a>
                        <a href="index.html?search=Oppo">Oppo</a>
                        <a href="index.html?search=Mobi">Mobi</a> -->
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
                    <a><i class="fa fa-user"></i>
                        Tài khoản
                    </a>
                    <div class="menuMember">
                        <a href="index.php?act=edit_taikhoan">Trang người dùng</a>
                        <a href="index.php?act=thoat">Đăng xuất</a>
                    </div>
                </div>
                
                <div class="cart">
                    <a href="index.php?act=viewcart">
                        <i class="fa fa-shopping-cart"></i>
                        <span>Giỏ hàng</span>
                        <span class="cart-number"></span>
                    </a>
                </div> <!-- End Cart -->

                <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div> -->
            </div><!-- End Tools Member -->
        </div> <!-- End Content -->
    </div>