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
                    <th style="width: 10%">Hành động</th>
                </tr>
            </table>
            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $xoatk="index.php?act=xoatk&id=".$id;
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
                                <td style="width: 10%">' . $role . '</td>
                                <td style="width: 10%">
                                    <div class="tooltip">
                                    <a href="'.$xoatk.'""><i class="fa fa-trash"></i></a>
                                <span class="tooltiptext">Xóa</span>
                            </div>
                            </td>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                    ';
            }
            ?>
    </div>
    <div class="table-footer">
        <select name="kieuTimSanPham">
            <option value="ma">Tìm theo mã</option>
            <option value="ten">Tìm theo tên</option>
        </select>
        <input type="text" placeholder="Tìm kiếm...">
    </div>
    </form>
</div>
