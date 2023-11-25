<div class="sanpham">
    <div class="table-content">
        <form action="index.php?act=listbill" method="POST">
            <div class="table-footer">
                <input style="width:30%;" type="text" name="kyw" placeholder="NHẬP MÃ ĐƠN HÀNG">
                <input type="submit" name="listok" value="GO">
            </div>
            
                <table>
                    <tr>
                        <th></th>
                        <th>MÃ ĐƠN HÀNG</th>
                        <th>KHÁCH HÀNG</th>
                        <th>SỐ LƯỢNG HÀNG</th>
                        <th>GIÁ TRỊ ĐƠN HÀNG</th>
                        <th>NGÀY ĐẶT HÀNG</th>
                        <th>TÌNH TRẠNG ĐƠN HÀNG</th>
                        <th>THAO TÁC</th>
                    </tr>
                    <?php   
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $xoabill="index.php?act=xoabill&id=".$id;
                            $kh=$bill["bill_name"].'<br> '.
                                $bill["bill_email"].'<br> '.
                                $bill["bill_address"].'<br> '.
                                $bill["bill_tel"];
                            $ttdh=get_ttdh($bill["bill_status"]);
                            $countsp=loadall_cart_count($bill['id']);
                            echo '<tr>
                                    <td><input type="checkbox" name="" id=""></td>
                                    <td>DAM-'.$bill['id'].'</td>
                                    <td>'.$kh.'</td>
                                    <td>'.$countsp.'</td>
                                    <td>'.$bill["total"].'</td>
                                    <td>'.$ttdh.'</td>
                                    <td>'.$bill["ngaydathang"].'</td>
                                    <td><a href="'.$xoabill.'"> <input type="button" value="Xóa"></a></td>
                                </tr>';
                        }                 
                    ?>
                    
                </table>
            
            <div class="row mb10 ">
                <input class="mr20" type="button" value="CHỌN TẤT CẢ">
                <input class="mr20" type="button" value="BỎ CHỌN TẤT CẢ">
            </div>
        </form>
    </div>
</div>