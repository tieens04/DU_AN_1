<div class="sanpham">
    <div class="table-content">
        <!-- Hiển thị thông tin tổng doanh thu và số lượng sản phẩm đã bán -->
        <?php
        $thongke = loadall_thongke();
        function count_orders_by_status() {
            $sql = "SELECT 
                        COUNT(CASE WHEN bill_status = 0 THEN 1 END) AS new_orders,
                        COUNT(CASE WHEN bill_status = 1 THEN 1 END) AS processing_orders,
                        COUNT(CASE WHEN bill_status = 2 THEN 1 END) AS delivering_orders,
                        COUNT(CASE WHEN bill_status = 3 THEN 1 END) AS completed_orders,
                        COUNT(CASE WHEN bill_status = 4 THEN 1 END) AS cancelled_orders
                    FROM bill";
        
            $result = pdo_query_one($sql);
            return $result;
        }
        
        if ($thongke) {
            echo '<table class="table-outline">';
            echo '<tbody>';
            echo '<tr>';
            echo '<td style="width: 25%">Tổng doanh thu: ' . number_format($thongke['total_revenue'], 0, ".", ".") . '₫</td>';
            echo '</tr>';
            echo '<tr>';
            echo '<td style="width: 25%">Tổng số lượng sản phẩm đã bán: ' . $thongke['total_sold_quantity'] . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';

            // Hiển thị sản phẩm bán chạy nhất
            if ($thongke['top_product']) {
                echo '<h3>Sản phẩm bán chạy nhất:</h3>';
                echo '<p>';
                echo 'Mã sản phẩm: ' . $thongke['top_product']['idsp'] . ', ';
                echo 'Tên sản phẩm: ' . $thongke['top_product']['tensp'] . ', ';
                echo 'Số lượng bán: ' . $thongke['top_product']['sold_quantity'];
                echo '</p>';
            } else {
                echo '<p>Không có sản phẩm nào được bán.</p>';
            }
            $thongke_donhang = count_orders_by_status();

            echo '<table>';
            echo '<tr>';
            echo '<th>Đơn hàng mới</th>';
            echo '<th>Đang xử lý</th>';
            echo '<th>Đang giao hàng</th>';
            echo '<th>Hoàn tất</th>';
            echo '<th>Đã hủy</th>';
            echo '</tr>';
            echo '<tr>';
            echo '<td>' . $thongke_donhang['new_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['processing_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['delivering_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['completed_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['cancelled_orders'] . '</td>';
            echo '</tr>';
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
