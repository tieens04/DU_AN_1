
<div class="chitietSanpham" style="margin-bottom: 100px">
    <?php
    extract($onesp);
    ?>
    <h1>
        <?= $name ?>
    </h1>

    <div class="rating">
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <i class="fa fa-star"></i>
        <span>
            <?= $danh_gia ?> đánh giá
        </span>
    </div>
    <div class="rowdetail group">
        <?php
        $hinh = $img_path . $img;
        echo '<div class="picture">
    <img style="width:390px" src="' . $hinh . '">
</div>';
        ?>

        <div class="price_sale">
            <div class="area_price">
                <strong>
                    <?= $price ?> ₫
                </strong>
                <label class="giamgia">
                    <i class="fa fa-bolt"> </i>
                    <?= $gia_tri_khuyen_mai ?> đ
                </label>
            </div>
            <div class="ship" style="display: none;">
                <img src="view/img/chitietsanpham/clock-152067_960_720.png">
                <div>NHẬN HÀNG TRONG 1 GIỜ</div>
            </div>
            <div class="area_promo">
                <strong>Khuyến mãi</strong>
                <div class="promo">
                    <img src="view/img/chitietsanpham/icon-tick.png">
                    <div>Khuyến mãi siêu lớn</div>
                </div>
            </div>
            <div class="policy">
                <div>
                    <img src="view/img/chitietsanpham/box.png">
                    <p>Trong hộp có: Sạc, Tai nghe, Sách hướng dẫn, Cây lấy sim, Ốp lưng </p>
                </div>
                <div>
                    <img src="view/img/chitietsanpham/icon-baohanh.png">
                    <p>Bảo hành chính hãng 12 tháng.</p>
                </div>
                <div class="last">
                    <img src="view/img/chitietsanpham/1-1.jpg">
                    <p>1 đổi 1 trong 1 tháng nếu lỗi, đổi sản phẩm tại nhà trong 1 ngày.</p>
                </div>
            </div>
            <div class="area_order">
                <!-- nameProduct là biến toàn cục được khởi tạo giá trị trong phanTich_URL_chiTietSanPham -->
                <a class="buy_now" href="index.php?act=giohang">
                    <b><i class="fa fa-cart-plus"></i> Thêm vào giỏ hàng</b>
                    <p>Giao trong 1 giờ hoặc nhận tại cửa hàng</p>
                </a>
            </div>
        </div>
        <div class="info_product">
            <h2>Thông số kỹ thuật</h2>

            <ul class="info">
                <li>
                    <p>Màn hình</p>
                    <div>
                        <?= $man_hinh ?>
                    </div>
                </li>
                <li>
                    <p>Hệ điều hành</p>
                    <div>
                        <?= $he_dieu_hanh ?>
                    </div>
                </li>
                <li>
                    <p>Camera sau</p>
                    <div>
                        <?= $camera_sau ?>
                    </div>
                </li>
                <li>
                    <p>Camera trước</p>
                    <div>
                        <?= $camera_truoc ?>
                    </div>
                </li>
                <li>
                    <p>CPU</p>
                    <div>
                        <?= $cpu ?>
                    </div>
                </li>
                <li>
                    <p>RAM</p>
                    <div>
                        <?= $ram ?>
                    </div>
                </li>
                <li>
                    <p>Bộ nhớ trong</p>
                    <div>
                        <?= $memory ?>
                    </div>
                </li>
                <li>
                    <p>Dung lượng pin</p>
                    <div>
                        <?= $pin ?>
                    </div>
                </li>
            </ul>
        </div>
    </div>

</div>
<div class="khungSanPham" style="border-color: #434aa8">
    <h3 class="tenKhung" style="background-image: linear-gradient(120deg, #434aa8 0%, #ec1f1f 50%, #434aa8 100%);">*
        Bạn
        có
        thể thích *</h3>
    <div class="listSpTrongKhung flexContain">

        <?php
        foreach ($sp_cungloai as $sp) {
            extract($sp);
            $hinh = $img_path . $img;
            echo '<li class="sanPham">
                <a href="index.php?act=chitietsanpham&idsp=' . $id . '">
                    <img src="' . $hinh . '" alt="">
                    <h3>' . $name . '</h3>
                    <div class="price">
                        <strong>' . $price . '₫</strong>
                    </div>
                    <div class="ratingresult">
                        <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                            class="fa fa-star"></i><i class="fa fa-star-o"></i><span>' . $danh_gia . 'đánh giá</span>
                    </div>
                    
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
