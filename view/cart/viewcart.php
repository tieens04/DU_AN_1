
<section style="min-height: 85vh">
    <form action="index.php?act=viewcart" method="POST">
        <table class="listSanPham">
            <?php
            if (isset($_SESSION['mycart']) && count($_SESSION['mycart']) > 0) {
            viewcart(1);
            echo'
            
            <input type="submit" value="TIẾP TỤC ĐẶT HÀNG" name="bill">'; 
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
        <h2>Bạn muốn <a style="color:red; font-weight: 700;" href="index.php?act=sanpham">đặt hàng</a> không?</h2>
        <a href="index.php">
            <input type="button" value="Về trang chủ"></a></div> ';
    }
    ?>
    </table> 
        <h2 class="thongbao">
            <?php 
                if(isset($thongbao)&&($thongbao!="")){
                    echo $thongbao;
                }
                
            ?>
            
        </h2> 
        <?php
            if(isset($_SESSION['user'])){
                    include "view/cart/mybill.php";
                }
            ?>
    </form>
    
    </section>
<!-- End Section -->