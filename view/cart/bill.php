<main class="catalog  mb ">
    <div class="boxleft">
        <form action="index.php?act=billcomfirm" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>
                    <?php
                    if (isset($_SESSION['user'])) {
                        $name = $_SESSION['user']['user'];
                        $address = $_SESSION['user']['address'];
                        $email = $_SESSION['user']['email'];
                        $tel = $_SESSION['user']['tel'];
                    } else {
                        $name = "";
                        $address = "";  
                        $email = "";
                        $tel = "";
                    }
                    ?>
                    <tr>
                        <td>Tên người dùng</td>
                        <td><input type="text" name="name" value="<?= $name ?>"></td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td><input type="text" name="address" value="<?= $address ?>"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" name="email" value="<?= $email ?>"></td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td><input type="text" name="tel" value="<?= $tel ?>"></td>
                    </tr>
                </table>
            </div>
            <div class="items">
                <div class="">Phương thúc thanh toán</div>
                <table>
                    <tr>
                        <td><input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng</td>
                        <td><input type="radio" value="2" name="pttt" checked>Chuyển khản ngân hàng</td>
                        <td><input type="radio" value="3" name="pttt" checked>Thanh toán online</td>
                    </tr>
                </table>
                <a href="index.php?act=billcomfirm">
                    <input class="custom-btn btn-13" type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                </a>
            </div>
            <div class="row mb">
                <div class="row2 mb10 formds_loai">
                    <table class="listSanPham">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
        </form>
    </div>
    
</main>