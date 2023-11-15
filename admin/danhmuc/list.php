<div class="sanpham">
    <div class="table-content">
        <form action="#" method="POST">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th title="Sắp xếp" style="width: 10%">Mã <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 40%">Tên <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Hành động</th>
                </tr>
            </table>

            <?php
            foreach ($listdanhmuc as $danhmuc) {
                extract($danhmuc);
                $suadm = "index.php?act=suadm&id=".$id;
                $xoadm = "index.php?act=xoadm&id=".$id;

                echo '
                <table class="table-outline">
                <tbody>
                    <tr>
                        <td style="width: 10%">' . $id . '</td>   
                        <td style="width: 40%">' . $name . '</td>
                        <td style="width: 15%">
                            <div class="tooltip">
                            <a href="'.$suadm.'""><i class="fa fa-wrench"></i></a>
                        <span class="tooltiptext">Sửa</span>
                                </div>
                            <div class="tooltip">
                            <a href="'.$xoadm.'""><i class="fa fa-trash"></i></a>
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
        <button><a href="index.php?act=adddm">
    <i class="fa fa-plus-square"></i>
    Thêm loại sản phẩm
</a></button>
    </div>
    </form>
</div>
