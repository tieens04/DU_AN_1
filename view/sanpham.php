<div class="contain-products">
    <ul id="products" class="homeproduct group flexContain">
        <?php
        $current_page = !empty($_GET['page']) ? $_GET['page'] : 1;
        $item_per_page = !empty($_GET['per_page']) ? $_GET['per_page'] : 10;

        $totalRecords = get_total_records();

        $totalPages = ceil($totalRecords / $item_per_page);

        $allsp = loadall_dssanpham($current_page, $item_per_page);

        if (!empty($allsp)) {
            foreach ($allsp as $row) {
                extract($row);
                $linksp = "index.php?act=chitietsanpham&idsp=" . $id;
                $hinh = $img_path . $img;
                // Hiển thị sản phẩm
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
        } else {
            // Hiển thị thông báo nếu không có sản phẩm
            echo '<div id="khongCoSanPham">
                    <i class="fa fa-times-circle"></i>
                    Không có sản phẩm nào
                </div>';
        }
        ?>
    </ul><!-- End products -->
</div>

<?php
    include 'phantrang.php';
?>
