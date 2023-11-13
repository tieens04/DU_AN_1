
<!DOCTYPE html>
<html lang="vi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>Thế giới điện thoại</title>
    <link rel="shortcut icon" href="view/img/favicon.ico" />

    <!-- Load font awesome icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        crossorigin="anonymous">
    <link rel="stylesheet" href="view/css/style.css">
    <link rel="stylesheet" href="view/css/topnav.css">
    <link rel="stylesheet" href="view/css/header.css">
    <link rel="stylesheet" href="view/css/banner.css">
    <link rel="stylesheet" href="view/css/taikhoan.css">
    <link rel="stylesheet" href="view/css/trangchu.css">
    <link rel="stylesheet" href="view/css/home_products.css">
    <link rel="stylesheet" href="view/css/pagination_phantrang.css">
    <link rel="stylesheet" href="view/css/footer.css">
    <!-- js -->
    <script src="view/main.js"></script>

</head>

<body>
    <div class="top-nav group">
        <section>
            <div class="social-top-nav">
                <a class="fa fa-facebook"></a>
                <a class="fa fa-twitter"></a>
                <a class="fa fa-google"></a>
                <a class="fa fa-youtube"></a>
            </div> <!-- End Social Topnav -->

            <ul class="top-nav-quicklink flexContain">
                <li><a href="index.php"><i class="fa fa-home"></i> Trang chủ</a></li>
                <li><a href="tintuc.html"><i class="fa fa-newspaper-o"></i> Tin tức</a></li>
                <li><a href="tuyendung.html"><i class="fa fa-handshake-o"></i> Tuyển dụng</a></li>
                <li><a href="gioithieu.html"><i class="fa fa-info-circle"></i> Giới thiệu</a></li>
                <li><a href="trungtambaohanh.html"><i class="fa fa-wrench"></i> Bảo hành</a></li>
                <li><a href="lienhe.html"><i class="fa fa-phone"></i> Liên hệ</a></li>
            </ul> <!-- End Quick link -->
        </section><!-- End Section -->
    </div>
    <section style="min-height: 85vh">
        <div class="header group">
            <div class="logo">
                <a href="index.php">
                    <img src="view/img/logo.jpg" alt="Trang chủ Smartphone Store" title="Trang chủ Smartphone Store">
                </a>
            </div> <!-- End Logo -->

            <div class="content">
                <div class="search-header" style="position: relative; left: 162px; top: 1px;">
                    <form class="input-search" method="get" action="index.html">
                        <div class="autocomplete">
                            <input id="search-box" name="search" autocomplete="off" type="text"
                                placeholder="Nhập từ khóa tìm kiếm...">
                            <button type="submit">
                                <i class="fa fa-search"></i>
                                Tìm kiếm
                            </button>
                        </div>
                    </form> <!-- End Form search -->
                    <div class="tags">
                        <strong>Từ khóa: </strong>
                        <a href="index.html?search=Samsung">Samsung</a><a href="index.html?search=iPhone">iPhone</a><a
                            href="index.html?search=Huawei">Huawei</a><a href="index.html?search=Oppo">Oppo</a><a
                            href="index.html?search=Mobi">Mobi</a>
                    </div>
                </div> <!-- End Search header -->

                <div class="tools-member">
                <?php 
                    if(isset($_SESSION['user'])){
                        extract($_SESSION['user']);
                ?>

                    <div class="member">
                        <a><i class="fa fa-user"></i><?=" ".$user?></a>
                        <div class="menuMember">
                            <a href="index.php?act=dangnhap">Trang người dùng</a>
                            <a href="index.php?act=thoat">Đăng xuất</a>
                        </div>
                    </div>                        

                <?php
                    }else{
                ?>
                    <div class="member">
                        <a><i class="fa fa-user"></i>Tài khoản</a>
                        <div class="menuMember">
                            <a href="index.php?act=dangnhap">Trang người dùng</a>
                            <a href="index.php?act=thoat">Đăng xuất</a>
                        </div>
                    </div> <!-- End Member -->
                <?php }?>
                    <div class="cart">
                        <a href="giohang.html">
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