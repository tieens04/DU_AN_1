<div class="sanpham">
    <div class="table-content">
        <form action="#" method="POST">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th style="width: 5%">Mã tài khoản <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Tên đăng nhập <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Mật khẩu <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Email <i class="fa fa-sort"></i></th>
                    <th style="width: 20%">Địa chỉ <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Điện thoại <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Vai trò <i class="fa fa-sort"></i></th>

                </tr>
            </table>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $xoatk = "index.php?act=xoatk&id=" . $id;
                $role_display = ($role == 0) ? 'User' : 'Admin'; // Hiển thị User nếu vai trò là 0, hiển thị Admin nếu vai trò là 1
                echo '
                    <table class="table-outline">
                        <tbody>
                            <tr>
                                <td style="width: 5%">' . $id . '</td>   
                                <td style="width: 10%">' . $user . '</td>
                                <td style="width: 10%">' . $pass . '</td>
                                <td style="width: 15%">' . $email . '</td>
                                <td style="width: 20%">' . $address . '</td>
                                <td style="width: 10%">' . $tel . '</td>
                                <td style="width: 10%">' . $role_display . '</td>
                            </tr>
                        </tbody>
                    </table>
                ';
            }
            
            ?>
    </div>
    <div class="table-footer">
        <input type="text" name="kyw" placeholder="Tìm kiếm...">
        <input type="submit" name="listok" value="OK">
    </div>
    </form>
</div>
