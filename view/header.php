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
    <link rel="stylesheet" href="view/css/tuyendung.css">
    <link rel="stylesheet" href="view/css/baohanh.css">
    <link rel="stylesheet" href="view/css/lienhe.css">
    <link rel="stylesheet" href="view/css/gioithieu.css">
    <link rel="stylesheet" href="view/css/tintuc.css">
    <link rel="stylesheet" href="view/css/gioHang.css">
    <link rel="stylesheet" href="view/css/chitietsanpham.css">
    <link rel="stylesheet" href="view/css/nguoidung.css">

    <style>
        .input-search input[type="text"] {
				float: left;	
				padding-left: 15px;
				border: none;
				border-radius: 10px 0 0 10px;
				height: 100%;
				width: calc(100% - 100px - 20px);
				/* 100 la width button, 20 la padding button */
			}
			.input-search input[type="submit"] {
				float: right;
				font-size: 14px;
				font-weight: bold;
				padding: 0 10px;
				color: #888;
				background: none;
				width: 100px;
				height: 100%;
				border: none;
				cursor: pointer;
				-webkit-transition-duration: .3s;
				     -o-transition-duration: .3s;
				        transition-duration: .3s;
			}
    </style>

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
                <li><a href="index.php?act=tintuc"><i class="fa fa-newspaper-o"></i> Tin tức</a></li>
                <li><a href="index.php?act=tuyendung"><i class="fa fa-handshake-o"></i> Tuyển dụng</a></li>
                <li><a href="index.php?act=gioithieu"><i class="fa fa-info-circle"></i> Giới thiệu</a></li>
                <li><a href="index.php?act=baohanh"><i class="fa fa-wrench"></i> Bảo hành</a></li>
                <li><a href="index.php?act=lienhe"><i class="fa fa-phone"></i> Liên hệ</a></li>
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
                <div class="search-headegir" style="position: relative; left: 162px; top: 1px;">
                    <form class="input-search" method="post" action="index.php?act=sanpham">
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

                    <!-- <div class="check-order">
                    <a>
                        <i class="fa fa-truck"></i>
                        <span>Đơn hàng</span>
                    </a>
                </div> -->
                </div><!-- End Tools Member -->
            </div> <!-- End Content -->
        </div>