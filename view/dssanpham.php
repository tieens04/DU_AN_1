<div class="contain-products">
    <div class="filterName">
        <input type="text" placeholder="Lọc trong trang theo tên..." value="<?= $tendm ?>">
    </div> <!-- End FilterName -->

    <ul id="products" class="homeproduct group flexContain">
        <div id="khongCoSanPham">
            <i class="fa fa-times-circle"></i>
            Không có sản phẩm nào
        </div> <!-- End Khong co san pham -->
        <?php
        foreach ($dssp as $sp) {
            extract($sp);
            $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
            $hinh = $img_path . $img;
            echo '<li class="sanPham">
    <a href="' . $linksp . '">
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
            <i class="fa fa-bolt"></i> ' . $gia_tri_khuyen_mai . '₫
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