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
        <div class="boxright1">
            <div class="boxtitle">CẬP NHẬT TÀI KHOẢN</div>
            <div class="boxcontent formtaikhoan">
                <?php
                if (isset($_SESSION['user']) && (is_array($_SESSION['user']))) {
                    extract($_SESSION['user']);
                }
                ?>
                <form action="index.php?act=edit_taikhoan" method="post" oninput='up2.setCustomValidity(up2.value != up.value ? "Mật khẩu không trùng." : "")'>
                    <div class="mb">
                        Email
                        <input type="email" name="email" id="" value="<?= $email ?>" disabled>
                    </div>

                    <div class="mb">
                        Tên đăng nhập
                        <input type="text" name="user" id="" value="<?= $user ?>" disabled>
                    </div>

                    <div class="mb">
                        Mật khẩu
                        <input type="password" name="pass" id="" value="<?= $pass ?>" disabled>
                    </div>

                    <div class="mb">
                        Địa chỉ
                        <input type="text" name="address" id="" value="<?= $address ?>" disabled>
                    </div>

                    <div class="mb">
                        Điện thoại
                        <input type="text" name="tel" id="" value="<?= $tel ?>" disabled>
                    </div>

                    <div class="mb">
                        <!-- Trigger the modal with a button -->
                        <button type="button" class="btn btn-info" data-toggle="modal" data-modal="modal1" data-target="#myModal">Cập nhật</button>

                        <!-- Modal -->
                        <div class="modal fade" id="myModal" role="dialog">
                            <div class="modal-dialog">

                                <!-- Modal content-->
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">Sửa thông tin</h4>
                                    </div>
                                    <div style="position: relative;padding: 15px;">
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
                                            <input type="password" name="pass" id="up" value="<?= $pass ?>">
                                        </div>
                                        <div class="mb">
                                            Xác nhận mật khẩu
                                            <input type="password" name="pass" id="up2" value="" required>
                                        </div>

                                        <div class="mb">
                                            Địa chỉ
                                            <input type="text" name="address" id="" value="<?= $address ?>">
                                        </div>

                                        <div class="mb">
                                            Điện thoại
                                            <input type="text" name="tel" id="" value="<?= $tel ?>">
                                        </div>
                                    </div>
                                    <div class="modal-footer">
                                        <div class="mb">
                                            <input type="hidden" name="id" value="<?= $id ?>">
                                            <input type="submit" value="Lưu" name="capnhat">
                                            <input type="reset" value="Nhập lại">
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

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