<main class="mb ">

    <div class="">

        <div class="">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
        </div>
        <form action="index.php?act=mybill" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="listSanPham">

                    <tr>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT</th>
                        <th>SỐ LƯỢNG</th>
                        <th>TỔNG GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                    </tr>
                    <?php
                    if (is_array($listbill)) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            echo '
                                <tr>
                                <td>DAM-' . $bill['id'] . '</td>
                                <td>' . $bill['ngaydathang'] . '</td>
                                <td>' . $countsp . '</td>
                                <td>' . $bill['total'] . '</td>
                                <td>' . $ttdh . '</td>
                            </tr>    
                                ';
                        }
                    }
                    ?>
                </table>
            </div>
        </form>
    </div>

    
</main>