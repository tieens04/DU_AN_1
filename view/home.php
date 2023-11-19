<div class="banner">
            <div class="owl-carousel owl-theme">
                <img id="banner" src="view/img/banners/banner1.png" alt="">
            </div>
        </div>

        <!-- <div class="owl-dots"><button role="button" class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot active"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button"
                class="owl-dot"><span></span></button><button role="button" class="owl-dot"><span></span></button></div>
        </div> -->
        <img src="view/img/banners/blackFriday.gif" alt="" style="width: 100%;">
        <br>
        <div class="companyMenu group flexContain">
            <!-- <a href="index.html?company=Apple"><img src="view/img/company/Apple.jpg"></a><a
                href="index.html?company=Samsung"><img src="view/img/company/Samsung.jpg"></a><a
                href="index.html?company=Oppo"><img src="view/img/company/Oppo.jpg"></a><a
                href="index.html?company=Nokia"><img src="view/img/company/Nokia.jpg"></a><a
                href="index.html?company=Huawei"><img src="view/img/company/Huawei.jpg"></a><a
                href="index.html?company=Xiaomi"><img src="view/img/company/Xiaomi.png"></a><a
                href="index.html?company=Realme"><img src="view/img/company/Realme.png"></a><a
                href="index.html?company=Vivo"><img src="view/img/company/Vivo.jpg"></a><a
                href="index.html?company=Philips"><img src="view/img/company/Philips.jpg"></a><a
                href="index.html?company=Mobell"><img src="view/img/company/Mobell.jpg"></a><a
                href="index.html?company=Mobiistar"><img src="view/img/company/Mobiistar.jpg"></a><a
                href="index.html?company=Itel"><img src="view/img/company/Itel.jpg"></a><a
                href="index.html?company=Coolpad"><img src="view/img/company/Coolpad.png"></a><a
                href="index.html?company=HTC"><img src="view/img/company/HTC.jpg"></a><a
                href="index.html?company=Motorola"><img src="view/img/company/Motorola.jpg"></a> -->

            <?php
            foreach ($dsdm as $dm) {
                extract($dm);
                $hinh = $img_path . $img;
                $linkdm = "index.php?act=dssanpham&iddm=" . $id;
                echo ' <a href="' . $linkdm . '"><img src="' . $hinh . '"></a>';
            }
            ?>
        </div>


        <div class="flexContain" id="myTopnav">

            <div class="pricesRangeFilter dropdown">
                <button class="dropbtn">Giá tiền</button>
                <div class="dropdown-content">
                    <a href="#">Dưới 2 triệu</a>
                    <a href="#">Từ 2 - 4 triệu</a>
                    <a href="#">Từ 4 - 7 triệu</a>
                    <a href="#">Từ 7 - 13 triệu</a>
                    <a href="#">Trên 13 triệu</a>
                </div>
            </div>

            <div class="promosFilter dropdown">
                <button class="dropbtn">Khuyến mãi</button>
                <div class="dropdown-content">
                    <a href="#">Giảm giá</a>
                    <a href="#">Trả góp</a>
                    <a href="#">Mới ra mắt</a>
                    <a href="#">Giá rẻ online</a>
                </div>
            </div>

            <div class="starFilter dropdown">
                <button class="dropbtn">Số lượng sao</button>
                <div class="dropdown-content">
                    <a href="#">Trên 2 sao</a>
                    <a href="#">Trên 3 sao</a>
                    <a href="#">Trên 4 sao</a>
                </div>
            </div>

            <div class="sortFilter dropdown">
                <button class="dropbtn">Sắp xếp</button>
                <div class="dropdown-content">
                    <a href="#">Giá tăng dần</a>    
                    <a href="#">Giá giảm dần</a>    
                    <a href="#">Sao tăng dần</a>
                    <a href="#">Sao giảm dần</a>    
                    <a href="#">Đánh giá tăng dần</a>   
                    <a href="#">Đánh giá giảm dần</a>   
                    <a href="#">Từ A-Z</a>  
                    <a href="#">Từ Z-A</a>
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
        <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #ff9c00 0%, #ec1f1f 50%, #ff9c00 100%);">
            *
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

    </section> <!-- End Section -->