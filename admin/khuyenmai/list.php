<div class="sanpham">
    <div class="table-content">
        <form action="#" method="POST">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th title="Sắp xếp" style="width: 10%">Mã khuyến mãi <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 40%">Tên khuyến mãi <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Hành động</th>
                </tr>
            </table>

            <?php
            foreach ($listkhuyenmai as $khuyenmai) {
                extract($khuyenmai);
                $suakm = "index.php?act=suakm&id=".$id;
                $xoakm = "index.php?act=xoakm&id=".$id;

                echo '
                <table class="table-outline">
                <tbody>
                    <tr>
                        <td style="width: 10%">' . $id . '</td>   
                        <td style="width: 40%">' . $name . '</td>
                        <td style="width: 15%">
                            <div class="tooltip">
                            <a href="'.$suakm.'""><i class="fa fa-wrench"></i></a>
                        <span class="tooltiptext">Sửa</span>
                                </div>
                            <div class="tooltip">
                            <a href="'.$xoakm.'""><i class="fa fa-trash"></i></a>
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
        <button><a href="index.php?act=addkm">
    <i class="fa fa-plus-square"></i>
    Thêm khuyến mãi
</a></button>
    </div>
    </form>
</div>
