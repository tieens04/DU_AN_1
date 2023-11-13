<div class="sanpham">
    <div class="table-content">
        <form action="#" method="POST">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th>Mã tài khoản <i class="fa fa-sort"></i></th>
                    <th>Tên đăng nhập <i class="fa fa-sort"></i></th>
                    <th>Mật khẩu <i class="fa fa-sort"></i></th>
                    <th>Email <i class="fa fa-sort"></i></th>
                    <th>Địa chỉ <i class="fa fa-sort"></i></th>
                    <th>Điện thoại <i class="fa fa-sort"></i></th>
                    <th>Vai trò <i class="fa fa-sort"></i></th>
                    <th>Hành động</th>
                </tr>
            </table>

            <?php
            foreach ($listtaikhoan as $taikhoan) {
                extract($taikhoan);
                $suatk="index.php?act=suatk&id=".$id;
                $xoatk="index.php?act=xoatk&id=".$id;

                echo '
                <table class="table-outline">
                <tbody>
                    <tr>
                        <td>' . $id . '</td>   
                        <td>' . $user . '</td>
                        <td>' . $pass . '</td>
                        <td>' . $email . '</td>
                        <td>' . $address . '</td>
                        <td>' . $tel . '</td>
                        <td>' . $role . '</td>
                        <td>
                            <div class="tooltip">
                            <a href="'.$suatk.'""><i class="fa fa-wrench"></i></a>
                        <span class="tooltiptext">Sửa</span>
                                </div>
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
        <button><a href="#">
    <i class="fa fa-plus-square"></i>
    Thêm tài khoản
</a></button>
    </div>
    </form>
</div>
