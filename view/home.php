<div class="banner">
    <div class="owl-carousel owl-theme">
        <img id="banner" src="view/img/banners/banner0.png" alt="">
    </div>
</div>

<div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
        class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button
        role="button" class="owl-dot active"><span></span></button><button role="button"
        class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button
        role="button" class="owl-dot"><span></span></button><button role="button"
        class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button><button
        role="button" class="owl-dot"><span></span></button></div>
</div>
<img src="view/img/banners/blackFriday.gif" alt="" style="width: 100%;">
<br>
<div class="companyMenu group flexContain">
    <?php
    foreach ($dsdm as $dm) {
        extract($dm);
        $hinh = $img_path . $img;
        $linkdm = "index.php?act=dssanpham&iddm=" . $id;
        echo ' <a href="' . $linkdm . '"><img src="' . $hinh . '"></a>';
    }
    ?>

</div>


<div class="flexContain">

    <div class="pricesRangeFilter dropdown">
        <button class="dropbtn">Giá tiền</button>
        <div class="dropdown-content">

            <a href="index.html?price=0-2000000">Dưới 2 triệu</a>
            <a href="index.html?price=2000000-4000000">Từ 2 - 4 triệu</a>
            <a href="index.html?price=4000000-7000000">Từ 4 - 7 triệu</a>
            <a href="index.html?price=7000000-13000000">Từ 7 - 13 triệu</a>
            <a href="index.html?price=13000000-0">Trên 13 triệu</a>
        </div>

    </div>

    <div class="promosFilter dropdown">
        <button class="dropbtn">Khuyến mãi</button>
        <div class="dropdown-content">
            <a href="index.html?promo=giamgia">Giảm giá</a>
            <a href="index.html?promo=tragop">Trả góp</a>
            <a href="index.html?promo=moiramat">Mới ra mắt</a>
            <a href="index.html?promo=giareonline">Giá rẻ online</a>
        </div>
    </div>

    <div class="starFilter dropdown">
        <button class="dropbtn">Màu</button>
        <div class="dropdown-content">
            <a href="index.html?promo=giamgia">Màu xanh</a>
            <a href="index.html?promo=tragop">Màu đỏ</a>
            <a href="index.html?promo=moiramat">Màu tím</a>
        </div>
    </div>

    <div class="sortFilter dropdown">
        <button class="dropbtn">Sắp xếp</button>
        <div class="dropdown-content">
            <a href="index.html?sort=price-ascending">Giá tăng dần</a>
            <a href="index.html?sort=price-decrease">Giá giảm dần</a>
            <a href="index.html?sort=star-ascending">Sao tăng dần</a>
            <a href="index.html?sort=star-decrease">Sao giảm dần</a>
            <a href="index.html?sort=rateCount-ascending">Đánh giá tăng dần</a>
            <a href="index.html?sort=rateCount-decrease">Đánh giá giảm dần</a>
            <a href="index.html?sort=name-ascending">Tên A-Z</a>
            <a href="index.html?sort=name-decrease">Tên Z-A</a>
        </div>
    </div>

</div> <!-- End khung chọn bộ lọc -->

<div class="choosedFilter flexContain">
    <a id="deleteAllFilter" style="display: none;">
        <h3>Xóa bộ lọc</h3>
    </a>
</div> <!-- Những bộ lọc đã chọn -->
<hr>

<!-- Mặc định mới vào trang sẽ ẩn đi, nế có filter thì mới hiện lên -->
<div class="contain-products" style="display:none">
    <div class="filterName">
        <input type="text" placeholder="Lọc trong trang theo tên...">
    </div> <!-- End FilterName -->

    <ul id="products" class="homeproduct group flexContain">
        <div id="khongCoSanPham">
            <i class="fa fa-times-circle"></i>
            Không có sản phẩm nào
        </div> <!-- End Khong co san pham -->
    </ul><!-- End products -->

    <div class="pagination"></div>
</div>

<!-- Div hiển thị khung sp hot, khuyến mãi, mới ra mắt ... -->
<div class="contain-khungSanPham">
    <div class="khungSanPham" style="border-color: #ff9c00">
        <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">*
            NỔI BẬT
            NHẤT *</h3>
        <div class="listSpTrongKhung flexContain">
            <?php
            foreach ($spnb as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                echo '<li class="sanPham">
                <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
    <img src="' . $hinh . '"
        alt="">
    <h3>' . $name . '</h3>
    <div class="price">
        <strong>' . $price . '₫</strong>
    </div>
    <div class="ratingresult">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
            class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
    </div>
    <label class="giamgia">
        <i class="fa fa-bolt"></i> Giảm ' . $gia_tri_khuyen_mai . '₫
    </label>
    <div class="tooltip">
        <button class="themvaogio">
            <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
            +
        </button>
    </div>
</a>
</li>';


            }
            ?>

        </div>
    </div>
    <!-- <a class="xemTatCa" href="index.php?act=dssanpham" style="	border-left: 2px solid #ff9c00;
                    border-right: 2px solid #ff9c00;">
            Xem tất cả 39 sản phẩm
        </a>
    </div> -->
    <div class="khungSanPham" style="border-color: #ff9c00">
        <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #42bcf4 0%, #004c70 50%, #42bcf4 100%);">*
            SẢN PHẨM
            MỚI *</h3>
        <div class="listSpTrongKhung flexContain">
            <?php
            foreach ($spmoi as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                echo '<li class="sanPham">
                <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
    <img src="' . $hinh . '"
        alt="">
    <h3>' . $name . '</h3>
    <div class="price">
        <strong>' . $price . '₫</strong>
    </div>
    <div class="ratingresult">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
            class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
    </div>
    <label class="giamgia">
        <i class="fa fa-bolt"></i> Giảm ' . $gia_tri_khuyen_mai . '₫
    </label>
    <div class="tooltip">
        <button class="themvaogio">
            <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
            +
        </button>
    </div>
</a>
</li>';
            }
            ?>



        </div>
    </div>
    <!-- <a class="xemTatCa" href="index.php?act=dssanpham" style="	border-left: 2px solid #ff9c00;
                    border-right: 2px solid #ff9c00;">
            Xem tất cả 39 sản phẩm
        </a>
    </div> -->
    <div class="khungSanPham" style="border-color: #ff9c00">
        <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">*
            TRẢ GÓP
            0% *</h3>
        <div class="listSpTrongKhung flexContain">
            <?php
            foreach ($sptragop as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                echo '<li class="sanPham">
                <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
    <img src="' . $hinh . '"
        alt="">
    <h3>' . $name . '</h3>
    <div class="price">
        <strong>' . $price . '₫</strong>
    </div>
    <div class="ratingresult">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
            class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
    </div>
    <label class="giamgia">
        <i class="fa fa-bolt"></i> Giảm ' . $gia_tri_khuyen_mai . '₫
    </label>
    <div class="tooltip">
        <button class="themvaogio">
            <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
            +
        </button>
    </div>
</a>
</li>';
            }
            ?>
        </div>
    </div>
    <!-- <a class="xemTatCa" href="index.php?act=dssanpham" style="	border-left: 2px solid #ff9c00;
                    border-right: 2px solid #ff9c00;">
            Xem tất cả 39 sản phẩm
        </a> 
    </div> -->
    <div class="khungSanPham" style="border-color: #ff9c00">
        <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">
            *
            GIẢM GIÁ
            LỚN *</h3>
        <div class="listSpTrongKhung flexContain">
            <?php
            foreach ($spgiamgia as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                echo '<li class="sanPham">
                <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
    <img src="' . $hinh . '"
        alt="">
    <h3>' . $name . '</h3>
    <div class="price">
        <strong>' . $price . '₫</strong>
    </div>
    <div class="ratingresult">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
            class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
    </div>
    <label class="giamgia">
        <i class="fa fa-bolt"></i> Giảm ' . $gia_tri_khuyen_mai . '₫
    </label>
    <div class="tooltip">
        <button class="themvaogio">
            <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
            +
        </button>
    </div>
</a>
</li>';
            }
            ?>
        </div>
    </div>
    <!-- <a class="xemTatCa" href="index.php?act=dssanpham" style="	border-left: 2px solid #ff9c00;
                    border-right: 2px solid #ff9c00;">
            Xem tất cả 39 sản phẩm
        </a>
    </div> -->
    <div class="khungSanPham" style="border-color: #ff9c00">
        <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #5de272 0%, #007012 50%, #5de272 100%);">
            *
            GIÁ RẺ
            CHO MỌI NHÀ *</h3>
        <div class="listSpTrongKhung flexContain">
            <?php
            foreach ($spgiare as $sp) {
                extract($sp);
                $hinh = $img_path . $img;
                echo '<li class="sanPham">
                <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
    <img src="' . $hinh . '"
        alt="">
    <h3>' . $name . '</h3>
    <div class="price">
        <strong>' . $price . '₫</strong>
    </div>
    <div class="ratingresult">
        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
            class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
    </div>
    <label class="giamgia">
        <i class="fa fa-bolt"></i> Giảm ' . $gia_tri_khuyen_mai . '₫
    </label>
    <div class="tooltip">
        <button class="themvaogio">
            <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
            +
        </button>
    </div>
</a>
</li>';
            }
            ?>
        </div>
    </div>


    <div style="margin-bottom:50px">
        <a class="xemTatCa" href="index.php?act=sanpham" style="	border-left: 2px solid #ff9c00;
                    border-right: 2px solid #ff9c00;">
            Xem tất cả sản phẩm
        </a>
    </div>
    </section>