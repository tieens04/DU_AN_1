</div>
<img src="view/img/banners/blackFriday.gif" alt="" style="width: 100%;">
<div class="infoUser">
    <hr>
    <div class="catalog mb">
        <div class="boxleft">
            <?php
            include "view/cart/mybill.php";
            ?>
        </div>
        <div class="boxright">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post">
                    <div class="mb">
                        Email
                        <input type="email" name="email" id="" value="<?= $email ?>">
                    </div>

                    <div class="mb">
                        Tên đăng nhập
                        <input type="text" name="user" id="" value="<?= $user ?>">
                    </div>

                    <div class="mb">
                        Mật khẩu
                        <input type="password" name="pass" id="" value="<?= $pass ?>">
                    </div>

                    <div class="mb">
                        Địa chỉ
                        <input type="text" name="address" id="" value="<?= $address ?>">
                    </div>

                    <div class="mb">
                        Điện thoại
                        <input type="text" name="tel" id="" value="<?= $tel ?>">
                    </div>

                    <div class="mb">
                        <input type="hidden" name="id" value="<?= $id ?>">
                        <input type="submit" value="Cập nhật" name="capnhat">
                        <input type="reset" value="Nhập lại">
                    </div>

                </form>
                <h2 class="thongbao">
                    <?php

                    if (isset($thongbao) && ($thongbao != "")) {
                        echo $thongbao;
                    }

                    ?>
                </h2>
                <?php if ($role == 1) { ?>
                    <li style="list-style-type: none;">Quản lý: <a href="../admin/index.php">Admin</a></li>
                <?php } ?>
            </div>
        </div>

    </div>
</div>


</body>

</html>