<div class="sanpham">
    <div class="table-content">
        <form action="index.php?act=listbill" method="POST">

            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th style="width: 10%">Mã đơn hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 25%">Khách hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Số lượng hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Giá trị đơn hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 20%">Ngày đặt hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Tình trạng đơn hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Thao tác <i class="fa fa-sort"></i></th>

                </tr>
            </table>
            <?php
            // Loop qua từng đơn hàng trong mảng $listbill và hiển thị thông tin của mỗi đơn hàng
            foreach ($listbill as $bill) {
                extract($bill);
                $suatrangthai = "index.php?act=trangthai&id=" . $id;
                $huy_don_hang = "index.php?act=huydonhang&id=" . $id;
                $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                $ttdh = get_ttdh($bill["bill_status"]);
                $countsp = loadall_cart_count($bill['id']);

                // Hiển thị thông tin đơn hàng và nút 'Cập nhật trạng thái' và 'Hủy đơn hàng'
                echo '
                    <table class="table-outline">
                        <tbody>
                            <tr>
                                <td style="width: 10%">DA1-' . $bill['id'] . '</td>   
                                <td style="width: 25%">' . $kh . '</td>
                                <td style="width: 10%">' . $countsp . '</td>
                                <td style="width: 10%">' . number_format($bill["total"], 0, ".", ".") . '₫</td>
                                <td style="width: 20%">' . $bill["ngaydathang"] . '</td>
                                <td style="width: 10%">' . $ttdh . '</td>
                                <td style="width: 15%">
                                    <a style="text-decoration: none; cursor: pointer;" href="' . $suatrangthai . '" class="update-status-button">Cập nhật trạng thái</a>
                                    <a style="text-decoration: none; cursor: pointer;" href="' . $huy_don_hang . '" class="cancel-order-button">Hủy đơn hàng</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                ';
            }
            ?>
    </div>
    <div class="table-footer">
        <input type="text" name="kyw" placeholder="Tìm kiếm...">
        <input type="submit" name="listok" value="OK">
    </div>
    </form>
</div>
