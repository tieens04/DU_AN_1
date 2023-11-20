
<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    if ($del == 1) {
        $xoasp_th = '<th>Thao tác</th>';
    } else {
        $xoasp_th = '';
    }
    echo '<tr>
            <th>STT</th>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th>
            ' . $xoasp_th . '
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td>
            <a href="index.php?act=delcart&idcart=' . $i . '">
            <input type="button" value="Xóa">
            </a>
            </td>';
        } else {
            $xoasp_td = '';
        }
        echo '<tr>
                <td>'.($i+1).'</td>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                ' . $xoasp_td . '
                </tr>';
        $i++;
    }
    echo '<tr>
            <td colspan="4">Tổng đơn hàng</td>
            <td colspan="2">' . $tong . '</td>
            <td><a href="index.php?act=delcart"> 
            <input type="button" value="Xóa tất cả"> </a></td>
            </tr>';
}
function loadall_thongke()
{
    $sql = "SELECT danhmuc.id as madm, danhmuc.name as tendm, 
            COUNT(sanpham.id) as countsp, 
            MIN(sanpham.price) as minprice, 
            MAX(sanpham.price) as maxprice, 
            AVG(sanpham.price) as avgprice ";
    $sql .= "FROM sanpham LEFT JOIN danhmuc ON danhmuc.id = sanpham.iddm ";
    $sql .= "GROUP BY danhmuc.id ORDER BY danhmuc.id DESC";

    $listtk = pdo_query($sql);
    return $listtk;
}
?>        
