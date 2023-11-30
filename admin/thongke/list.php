<div class="sanpham">
    <div class="table-content">
        <form action="#" method="POST">
            <table class="table-header">
                    
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th title="Sắp xếp" style="width: 10%">Mã danh mục <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 10%">Tên danh mục <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 10%">Số lượng <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%">Giá cao nhất <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%">Giá thấp nhất <i class="fa fa-sort"></i></th>
                    <th title="Sắp xếp" style="width: 15%">Giá trung bình <i class="fa fa-sort"></i></th>
                </tr>
            </table>

            <?php
            foreach ($listthongke as $thongke) {
                extract($thongke);
                echo '
                <table class="table-outline">
                <tbody>
                    <tr>
                        <td style="width: 10%">' . $madm . '</td>   
                        <td style="width: 10%">' . $tendm . '</td>   
                        <td style="width: 10%">' . $countsp . '</td>   
                        <td style="width: 15%">' . number_format($maxprice, 0, ".", ".") . '₫</td>   
                        <td style="width: 15%">' . number_format($minprice, 0, ".", ".") . '₫</td>   
                        <td style="width: 15%">' . number_format($avgprice, 0, ".", ".") . '₫</td> 
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
        <button>
            <a href="index.php?act=bieudo">Xem biểu đồ</a>
        </button>
    </div>
    </form>
</div>
