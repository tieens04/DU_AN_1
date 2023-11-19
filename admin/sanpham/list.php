
<!-- Sản Phẩm -->
<div class="sanpham">

    <div class="table-content">
        <form action="index.php?act=listsp" method="POST">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th title="Sắp xếp" style="width: 5%">Mã<i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 10%">Hình<i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 40%">Tên sản phẩm <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%">Giá <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%">Số lượng <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Hành động</th>
                </tr>
            </table>
            <?php
            foreach ($listsanpham as $sanpham) {
                extract($sanpham);
                $suasp = "index.php?act=suasp&id=" . $id;
                $xoasp = "index.php?act=xoasp&id=" . $id;
                $hinhpath = "../upload/" . $img;
                if (is_file($hinhpath)) {
                    $hinh = "<img src='" . $hinhpath . "'height='50'>";
                } else {
                    $hinh = "no photo";
                }
                echo '
                <table class="table-outline">
                    <tr>
                        <td style="width: 5%">' . $id . '</td>   
                        <td style="width: 10%">' . $hinh . '</td>
                        <td style="width: 40%">' . $name . '</td>
                        <td style="width: 15%">' . $price . '</td>
                        <td style="width: 15%">' . $so_luong . '</td>
                        <td style="width: 15%">
                            <div class="tooltip">
                                <a href="' . $suasp . '""><i class="fa fa-wrench"></i></a>
                                <span class="tooltiptext">Sửa</span>
                            </div>
                            <div class="tooltip">
                                <a href="' . $xoasp . '""><i class="fa fa-trash"></i></a>
                                <span class="tooltiptext">Xóa</span>
                            </div>
                        </td>
                    </tr>
                    </table>
                    ';
            }
            ?>
            <div class="table-footer">
                <select name="kieuTimSanPham">
                    <option value="ma">Tìm theo mã</option>
                    <option value="ten">Tìm theo tên</option>
                </select>
                <input type="text" placeholder="Tìm kiếm...">
                <button><a href="index.php?act=addsp">
                        <i class="fa fa-plus-square"></i>
                        Thêm sản phẩm
                    </a></button>
            </div>
        </form>
    </div>
</div>
</div>
</body>

</html>