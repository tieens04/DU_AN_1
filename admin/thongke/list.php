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
            echo '<div class="info-table">';
            echo '<div class="info-row">';
            echo '<span class="info-label">Tổng doanh thu:</span>';
            echo '<span class="info-value">' . number_format($thongke['total_revenue'], 0, ".", ".") . '₫</span>';
            echo '</div>';
            echo '<div class="info-row">';
            echo '<span class="info-label">Tổng số lượng sản phẩm đã bán:</span>';
            echo '<span class="info-value">' . $thongke['total_sold_quantity'] . '</span>';
            echo '</div>';
            echo '</div>';

            // Hiển thị sản phẩm bán chạy nhất
            if ($thongke['top_product']) {
                echo '<div class="top-product">';
                echo '<h3>Sản phẩm bán chạy nhất:</h3>';
                echo '<p>';
                echo 'Mã sản phẩm: ' . $thongke['top_product']['idsp'] . ', ';
                echo 'Tên sản phẩm: ' . $thongke['top_product']['tensp'] . ', ';
                echo 'Số lượng bán: ' . $thongke['top_product']['sold_quantity'];
                echo '</p>';
                echo '</div>';
            } else {
                echo '<div class="no-product">';
                echo '<p>Không có sản phẩm nào được bán.</p>';
                echo '</div>';
            }
            $thongke_donhang = count_orders_by_status();

            echo '<div class="order-stats">';
            echo '<table>';
            echo '<thead>';
            echo '<tr>';
            echo '<th>Đơn hàng mới</th>';
            echo '<th>Đang xử lý</th>';
            echo '<th>Đang giao hàng</th>';
            echo '<th>Hoàn tất</th>';
            echo '<th>Đã hủy</th>';
            echo '</tr>';
            echo '</thead>';
            echo '<tbody>';
            echo '<tr>';
            echo '<td>' . $thongke_donhang['new_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['processing_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['delivering_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['completed_orders'] . '</td>';
            echo '<td>' . $thongke_donhang['cancelled_orders'] . '</td>';
            echo '</tr>';
            echo '</tbody>';
            echo '</table>';
            echo '</div>';
            
        } else {
            echo '<div class="no-data">';
            echo 'Không có dữ liệu để hiển thị.';
            echo '</div>';
        }
        ?>
    </div>
    <div class="table-footer">
        <button>
            <a href="index.php?act=bieudo">Xem biểu đồ</a>
        </button>
    </div>
</div>
