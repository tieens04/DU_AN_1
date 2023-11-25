<main class="catalog  mb ">
    <div class="boxleft">
        <form action="index.php?act=billcomfirm" method="POST">
            <div>
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

                    <div class="boxtitle">THÔNG TIN LIÊN HỆ</div>
                    <div class="row boxcontent formtaikhoan">
                            <div class="mb">
                            Tên người dùng
                            <input type="text" name="name" value="<?= $name ?>">
                            </div>
                            
                            <div class="mb">
                            Địa chỉ
                            <input type="text" name="address" value="<?= $address ?>">
                            </div>

                            <div class="mb">
                            Email
                            <input type="text" name="email" value="<?= $email ?>"><br>
                            </div>

                            <div class="mb">
                            Điện thoại
                            <input type="text" name="tel" value="<?= $tel ?>">
                            </div>                          
                    </div>
                </table>
            </div>

            <div class="row mb">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
                <div>
                    <table class="listSanPham">
                        <?php
                        viewcart(0);
                        ?>
                    </table>
                </div>
            </div>
        
    </div>
    <div class="boxright">
            <div class="items">
                <div class="boxtitle">PHƯƠNG THỨC THANH TOÁN</div>
                
                    
                        <input type="radio" value="1" name="pttt" checked>Trả tiền khi nhận hàng <br>
                        <input type="radio" value="2" name="pttt" checked>Chuyển khản ngân hàng <br>
                        <input type="radio" value="3" name="pttt" checked>Thanh toán online <br>
                    
                
                <a href="index.php?act=billcomfirm">
                    <input class="custom-btn btn-13" type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                </a>
            </div>
        </form>
    </div>
</main>