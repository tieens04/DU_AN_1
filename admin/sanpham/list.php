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
                            <td style="width: 15%">' . number_format($price, 0, ".", ".") . '₫</td>
                            <td style="width: 15%">' . number_format($so_luong, 0, ".", ".") . '</td>
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
        </div>
        <div class="table-footer">
            <select name="iddm">
                <option value="0" selected>Tất cả</option>
                <?php
                foreach ($listdanhmuc as $danhmuc) {
                    extract($danhmuc);
                    echo '<option value="' . $id . '">' . $name . '</option>';
                }
                ?>
            </select>
            <input type="text" name="kyw" placeholder="Tìm kiếm...">
            <input type="submit" name="listok" value="OK">
            <button>
                <a href="index.php?act=addsp">
                    <i class="fa fa-plus-square"></i>Thêm sản phẩm</a>
            </button>
        </div>
        </form>
    </div>