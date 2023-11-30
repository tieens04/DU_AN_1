<section style="min-height: 85vh">
    <form action="index.php?act=viewcart" method="POST">
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }
            ?>
        </h2>
        <table class="listSanPham">
            <?php
            if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                viewcart(1);
            } else {
                echo '<tr>
                    <th>STT</th>
                    <th>Hình</th>
                    <th>Sản phẩm</th>
                    <th>Đơn giá</th>
                    <th>Số lượng</th>
                    <th>Khuyến mãi</th>
                    <th>Thành tiền</th>
                    <th>Thao tác</th>
                    </tr>
                    <tr>
                 <td colspan="8" style="padding-top: 0px; padding-bottom: 0px;"> 
                    <h1 style="margin: 0; color: green; background-color: white; font-weight: bold; text-align: center; padding: 15px 0;">
                    Giỏ hàng trống!! <a style="color: red; font-weight: 700;" href="index.php?act=sanpham">Bạn muốn đặt hàng không?</a>
                    </h1> 
                    </td>
                </tr>';
    
            }
            ?>
        </table>
        <?php
        if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
            echo '<input class="btn-13 custom-btn" type="submit" value="TIẾP TỤC ĐẶT HÀNG" name="bill">';
        }
        ?>
    </form>
</section>
<!-- End Section -->