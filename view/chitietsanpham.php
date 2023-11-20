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
</div>';?>
        <div class="price_sale">
            <div class="area_price">
                <strong>
                    <?=$price?> ₫
                </strong>
                <label class="giamgia">
                    <i class="fa fa-bolt"> </i>
                    <?= $gia_tri_khuyen_mai ?> đ
                </label>
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
            <?php
            echo' 
            <form action="index.php?act=addtocart" method="POST">
            <input type = "hidden" name ="id" value="' . $id . '">
            <input type = "hidden" name ="name" value="' . $name . '">
            <input type = "hidden" name ="img" value="' . $img . '">
            <input type = "hidden" name ="price" value="' . $price . '">
            <div class="area_order">

            <input class="buy_now" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
            <i class="fa fa-cart-plus" onclick="document.querySelector(&quot;.buy_now&quot;).click()"></i>
            </div></form>';?>
        </div>
        <div class="info_product">
            <h2>Thông số kỹ thuật</h2>

            <ul class="info">
                <li>
                    <p>Màn hình</p>
                    <div>
                        <?= $man_hinh?>
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
<div class="">
    <?php
    include "./view/binhluan/comment.php";

?>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                $("#binhluan").load("../view/binhluan/comment.php", { idpro: <?= $id ?> });
            });
        </script>
        <div class="mb" id="binhluan">
            
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
                    <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                    <i class="fa fa-star"></i><i class="fa fa-star-o"></i><span>' . $danh_gia . 'đánh giá</span>
                    </div>
                        <form action="index.php?act=addtocart" method="POST">
                        <input type = "hidden" name ="id" value="' . $id . '">
                        <input type = "hidden" name ="name" value="' . $name . '">
                        <input type = "hidden" name ="img" value="' . $img . '">
                        <input type = "hidden" name ="price" value="' . $price . '">
                        <div class="tooltip">
                        <input class="themvaogio" type="submit" name ="addtocart" value="+">
                        <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                        </div>
                        </form>
                </a>
            </li>';
        }
        ?>
    </div>
</div>