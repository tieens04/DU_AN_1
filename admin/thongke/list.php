<div class="sanpham">
    <div class="table-content">
        <!-- Hiển thị thông tin tổng doanh thu và sản phẩm bán chạy nhất -->
        <?php
        $thongke = loadall_thongke();

        if ($thongke) {
            echo '<table class="table-outline">';
            echo '<tbody>';
            echo '<tr>';
            echo '<td style="width: 25%">Tổng doanh thu: ' . number_format($thongke['total_revenue'], 0, ".", ".") . '₫</td>';
            echo '<td style="width: 25%">Mã sản phẩm bán chạy nhất: ' . $thongke['idsp'] . '</td>';
            echo '<td style="width: 25%">Tên sản phẩm bán chạy nhất: ' . $thongke['tensp'] . '</td>';
            echo '<td style="width: 25%">Số lượng bán: ' . $thongke['sold_quantity'] . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
        } else {
            echo 'Không có dữ liệu để hiển thị.';
        }
        ?>
    </div>
    <div class="table-footer">
        <button>
            <a href="#">Xem biểu đồ</a>
        </button>
    </div>
</div>
