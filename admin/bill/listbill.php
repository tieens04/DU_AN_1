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

                </tr>
            </table>
            <?php
            foreach ($listbill as $bill) {
                extract($bill);
                $xoabill="index.php?act=xoabill&id=".$id;
                $kh=$bill["bill_name"].'
                <br> '.$bill["bill_email"].'
                <br> '.$bill["bill_address"].'
                <br> '.$bill["bill_tel"];
                $ttdh=get_ttdh($bill["bill_status"]);
                $countsp=loadall_cart_count($bill['id']);
                echo '  
                        <table class="table-outline">
                        <tbody>
                            <tr>
                                <td style="width: 10%">DA1-'.$bill['id'].'</td>   
                                <td style="width: 25%">'.$kh.'</td>
                                <td style="width: 10%">'.$countsp.'</td>
                                <td style="width: 10%">' . number_format($bill["total"], 0, ".", ".") . '₫</td>
                                <td style="width: 20%">'.$bill["ngaydathang"].'</td>
                                <td style="width: 10%">'.$ttdh.'</td>
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
