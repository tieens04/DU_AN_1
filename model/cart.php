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
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . $cart[3] . '</td>
                <td>' . $cart[4] . '</td>
                <td>' . $ttien . '</td>
                    ' . $xoasp_td . '
                </tr>
            </td>
        ';
        $i += 1;
    }
    echo '<tr>
<td colspan="4">Tổng đơn hàng</td>
<td colspan="2">' . $tong . '</td>
<td></td>
</tr>';

}
?>
