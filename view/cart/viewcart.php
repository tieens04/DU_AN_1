<section style="min-height: 60vh">
    <form id="cart-form" action="index.php?act=viewcart" method="POST">
        <table class="listSanPham" >
            <?php
            if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
                viewcart(1);
                echo '
            <a href="index.php"><input style="margin:10px" type="button" class="btn btn-primary" value="Về trang chủ"></a>
            <div style="float:right;padding:10px"><input style="width:100px" type="submit" class="btn btn-primary" value="Đặt hàng" name="bill"></div>';
            } else {
                echo ' <tr>
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
		        <h1 style="color:green; background-color:white; font-weight:bold; text-align:center; padding: 15px 0;">
					Giỏ hàng trống !!     
		        </h1> 
                </td>
            </tr>
            <div >
        <h2 style="position: absolute;top: 300px">Bạn muốn <a style="color:red; font-weight: 700;" href="index.php?act=sanpham">đặt hàng</a> không?</h2>
        <a href="index.php"><input style="margin:10px" type="button" class="btn btn-primary" value="Về trang chủ"></a></div> ';
            }
            ?>
        </table>
        <h2 class="thongbao">
            <?php
            if (isset($thongbao) && ($thongbao != "")) {
                echo $thongbao;
            }

            ?>

        </h2>
    </form>
<script>
    function sendData(soluongmoi,id) {
    
    // Sử dụng fetch để gửi dữ liệu lên server
    $.ajax({
            type: 'POST',
            url: 'view/cart/process.php',
            data: {
                id: id,
                soluong: soluongmoi
            },
            success: function(response) {
                // Sau khi cập nhật thành công
                $.post('model/cart.php', function(data) {
                    $('#soluong').html(data);
                })
            },
            error: function(error) {
                console.log(error);
            },
        })
    
}
</script>
</section>
<!-- End Section -->