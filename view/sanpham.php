<?php

    
?>
<div class="contain-products">
    <!-- <div class="filterName">
        <input type="text" placeholder="Lọc trong trang theo tên..." value="<?= $tendm ?>">
    </div> End FilterName -->

    <ul id="products" class="homeproduct group flexContain">
        <div id="khongCoSanPham">
            <i class="fa fa-times-circle"></i>
            Không có sản phẩm nào
        </div> <!-- End Khong co san pham -->
        <?php
        foreach ($allsp as $sp) {
            extract($sp);
            $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
            $hinh = $img_path . $img;
            echo '<li class="sanPham">
    <a href="' . $linksp . '">
        <img src="' . $hinh . '"
            alt="">
        <h3>' . $name . '</h3>
        <div class="price">
            <strong>' . number_format($price, 0, ".", ".") . '₫</strong>
        </div>
        <div class="ratingresult">
            <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i
                class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
        </div>
        <label class="giamgia">
            <i class="fa fa-bolt"></i> ' . number_format($gia_tri_khuyen_mai, 0, ".", ".") . '₫
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
    </ul><!-- End products -->
</div>
<!-- <?php
 include "view/phantrang.php";
?> -->