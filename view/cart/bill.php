<br><main class="catalog  mb ">
    <div class="boxleft">
        <form action="index.php?act=billcomfirm" method="POST">
            <div>
                
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

                    <div class="boxtitle">Địa chỉ giao hàng</div>
                    <div class="row boxcontent formtaikhoan">
                            <div class="mb">
                            Tên người dùng
                            <input type="text" name="name" value="<?= $name ?>" required>
                            </div>
                            
                            <div class="mb">
                            Địa chỉ
                            <input type="text" name="address" value="<?= $address ?>" required>
                            </div>

                            <div class="mb">
                            Email
                            <input type="text" name="email" value="<?= $email ?>" required>
                            </div>

                            <div class="mb">
                            Điện thoại
                            <input type="text" name="tel" value="<?= $tel ?>" required>
                            </div>                          
                    </div>
                
            </div><br>

            <div class="">
            <div class="boxtitle">Đơn hàng của bạn</div>
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
                <div class="boxtitle1">Phương thức thanh toán</div>
                
                    
                        <!-- <label class="container" for=""><input type="radio" value="1" name="pttt" checked><i class="fa fa-money" aria-hidden="true"></i>Trả tiền khi nhận hàng</label> <br>
                        <label class="container" for=""><input type="radio" value="2" name="pttt" checked>Chuyển khản ngân hàng</label> <br>
                        <label class="container" for=""><input type="radio" value="3" name="pttt" checked>Thanh toán online</label> <br> -->
                    <label class="container"><i class="fa fa-money" aria-hidden="true"></i>  Trả tiền khi nhận hàng
                        <input type="radio" value="1" name="pttt" checked>
                        <span class="checkmark"></span><hr>
                        <span class="span">Trả tiền khi nhận hàng</span>
                    </label>

                    <label class="container"><i class="fa fa-credit-card-alt" aria-hidden="true"></i> Chuyển khản ngân hàng
                        <input type="radio" value="2" name="pttt">
                        <span class="checkmark"></span><hr>
                        <span class="span">Chuyển khoản ngân hàng</span>
                    </label>

                    <label class="container"><i class="fa fa-credit-card" aria-hidden="true"></i> Thanh toán online
                        <input type="radio" value="3" name="pttt">
                        <span class="checkmark"></span><hr>
                        <span class="span">Bạn phải có tài khoản VNPay</span>
                    </label>
                
                <!-- <a href="index.php?act=billcomfirm"> -->
                    <input class="custom-btn btn-13" type="submit" value="ĐỒNG Ý ĐẶT HÀNG" name="dongydathang">
                <!-- </a> -->
            </div>
        </form>
    </div>
</main>