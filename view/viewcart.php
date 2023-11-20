
<section style="min-height: 85vh">
    <form action="index.php?act=viewcart" method="POST">
        <table class="listSanPham">
            <?php
            if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
            viewcart(1);
            echo'
            <a href="index.php?act=bill">
            <input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>'; 
        } else {
            echo ' <tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            <th>Thao tác</th>
            </tr>
            <td colspan="7" style="padding-top: 0px; padding-bottom: 0px;"> 
		<h1 style="color:green; background-color:white; font-weight:bold; text-align:center; padding: 15px 0;">
					Giỏ hàng trống !!     
		</h1> 
        </td>
        <h2>Bạn muốn <a style="color:red; font-weight: 700;" href="index.php?act=sanpham">đặt hàng</a> không?</h2>
        <a href="index.php">
            <input type="button" value="Về trang chủ"></a> ';
    }
    ?>
    </table> 
    </form>
    </section>
<!-- End Section -->
