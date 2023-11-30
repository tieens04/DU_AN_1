<div class="contain-products">
    <div class="choosedFilter flexContain">
        <a id="deleteAllFilter" style="display: block;" href="index.php">
            <h3>Xóa bộ lọc</h3>
        </a>
        <a href="index.php">
            <h3>
                Trả góp <i class="fa fa-close"></i>
            </h3>
        </a>
    </div>

    <ul id="products" class="homeproduct group flexContain">
        <div id="khongCoSanPham">
            <i class="fa fa-times-circle"></i>
            Không có sản phẩm nào
        </div> <!-- End Khong co san pham -->
        <?php
        foreach ($sp_tragop as $sp) {
            extract($sp);
            $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
            $hinh = $img_path . $img;
            echo '<li class="sanPham">
                <a href="' . $linksp . '">
                <img src="' . $hinh . '" alt="">
                <h3>' . $name . '</h3>
                <div class="price">
                <strong>' . number_format($price, 0, ".", ".") . '₫</strong>
                </div>
                <div class="ratingresult">
                <i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i>
                <i class="fa fa-star"></i><i class="fa fa-star"></i><span>' . $danh_gia . ' đánh giá</span>
                </div>
                <label class="giamgia">
                <i class="fa fa-bolt"></i> Giảm ' . number_format($gia_tri_khuyen_mai, 0, ".", ".") . '₫
                </label>
                <form action="index.php?act=addtocart" method="POST">
                <input type = "hidden" name ="id" value="' . $id . '">
                <input type = "hidden" name ="name" value="' . $name . '">
                <input type = "hidden" name ="img" value="' . $img . '">
                <input type = "hidden" name ="price" value="' . $price . '">
                <input type = "hidden" name ="gia_tri_khuyen_mai" value="' . $gia_tri_khuyen_mai . '">
                <div class="tooltip">
                <input class="themvaogio" type="submit" name ="addtocart" value="+">
                <span class="tooltiptext" style="font-size: 15px;">Thêm vào giỏ</span>
                </div>
                </form>
                </a>
                </li>';
        }
        ?>
    </ul><!-- End products -->
</div>
<div class="pagination">
    <a href=""><i class="fa fa-angle-left"></i></a>
    <a href="index.php?act=dssanpham" class="current">1</a>
    <a href="index.php?act=dssanpham">2</a>
    <a href="index.php?act=dssanpham">3</a>
    <a href="index.php?act=dssanpham"><i class="fa fa-angle-right"></i></a>
</div>