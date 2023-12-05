
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
            <th>Khuyến mãi</th>
            <th>Thành tiền</th>
            ' . $xoasp_th . '
            </tr>';
    foreach ($_SESSION['mycart'] as $cart) {
        $hinh = $img_path . $cart[2];
        $ttien = $cart[3] * $cart[4] - $cart[5];
        $tong += $ttien;
        if ($del == 1) {
            $xoasp_td = '<td>
            <a href="index.php?act=delcart&idcart=' . $i . '">
            <i class="fa fa-minus" aria-hidden="true"></i>
            </a>
            </td>';
        } else {
            $xoasp_td = '';
        }
        echo '<tr>
                <td>' . ($i + 1) . '</td>
                <td><img src="' . $hinh . '" alt="" height="80px"></td>
                <td>' . $cart[1] . '</td>
                <td>' . number_format($cart[3], 0, ".", ".") . '₫</td>
                <td>' . $cart[4] . '</td>
                <td>' . number_format($cart[5], 0, ".", ".") . '₫</td>
                <td>' . number_format($ttien, 0, ".", ".") . '₫</td>
                ' . $xoasp_td . '
            </tr>';
        $i++;
    }
    if ($del == 1) {
        $xoasp_tc = '<td><a href="index.php?act=delcart"> 
        <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa hết </a></td>';
    } else {
        $xoasp_tc = '';
    }
    echo '<tr>
            <td colspan="6">Tổng đơn hàng</td>
            <td colspan="1">' . number_format($tong, 0, ".", ".") . '</td>
            ' . $xoasp_tc . '
            </tr>';
}

//////

function bill_chi_tiet($listbill)
{
    global $img_path;
    $tong = 0;
    $i = 0;

    echo '<tr>
            <th>Hình</th>
            <th>Sản phẩm</th>
            <th>Đơn giá</th>
            <th>Số lượng</th>
            <th>Thành tiền</th> 
            </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];

        $tong += $cart['thanhtien'];
        echo '<tr>  
        <td><img src="' . $hinh . '" alt="" height="80px"></td>
        <td>' . $cart['name'] . '</td>
        <td>' . number_format($cart['price'], 0, ".", ".") . '</td>
        <td>' . $cart['soluong'] . '</td>
        <td>' . $cart['thanhtien'] . '</td>
        </tr>';
        $i += 1;
    }
    echo '<tr style="height: 50px;">
<td colspan="4">Tổng đơn hàng</td>
<td>' . $tong . '</td>
</tr>';
}
function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $ttien = $cart[3] * $cart[4] - $cart[5];
        $tong += $ttien;
    }
    return $tong;
}

function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong, $thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$thanhtien','$idbill')";
    return pdo_execute($sql);
}
function loadone_bill($id)
{
    $sql = "select * from bill where id=" . $id;
    $bill = pdo_query_one($sql);
    return $bill;
}
function loadall_cart($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return $bill;
}
function loadall_cart_count($idbill)
{
    $sql = "select * from cart where idbill=" . $idbill;
    $bill = pdo_query($sql);
    return sizeof($bill);
}
function loadall_bill($iduser)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0)
        $sql .= " AND iduser=" . $iduser;
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id){
    // Kiểm tra trạng thái của đơn hàng trước khi xóa
    $bill_status = pdo_query_value("SELECT bill_status FROM bill WHERE id = ?", [$id]);

    // Chỉ cho phép xóa đơn hàng ở trạng thái mới (ví dụ: trạng thái 1 là trạng thái mới)
    if ($bill_status == 1) {
        $sql = "DELETE FROM bill WHERE id = ?";
        pdo_execute($sql, [$id]);
    } else {
        // Nếu không ở trạng thái mới, không cho phép xóa
        // Có thể cung cấp thông báo hoặc xử lý tùy thuộc vào yêu cầu của bạn
        echo "Không thể xóa đơn hàng ở trạng thái này.";
    }
}
function get_ttdh($n)
{
    switch ($n) {
        case '0':
            $tt = "Đơn hàng mới";
            break;
        case '1':
            $tt = "Đang xử lý";
            break;
        case '2':
            $tt = "Đang giao hàng";
            break;
        case '3':
            $tt = "Hoàn tất";
            break;

        default:
            $tt = "Đơn hàng mới";
            break;
    }
    return $tt;
}
function update_bill_status($id_donhang, $trangthai_moi) {
    $sql = "UPDATE bill SET bill_status = :trangthai_moi WHERE id = :id_donhang";
    $params = array(':trangthai_moi' => $trangthai_moi, ':id_donhang' => $id_donhang);
    return pdo_execute($sql, $params);
}


function get_pttt($a)
{
    switch ($a) {
        case '1':
            $pt = "Trả tiền khi nhận hàng";
            break;
        case '2':
            $pt = "Chuyển khản ngân hàng";
            break;
        case '3':
            $pt = "Thanh toán online";
            break;
        default:
            $pt = "Trả tiền khi nhận hàng";
            break;
    }
    return $pt;
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




function check_out()
{

    $vnp_Url = "https://sandbox.vnpayment.vn/paymentv2/vpcpay.html";
    $vnp_Returnurl = "http://localhost/DA/vnpay_php/vnpay_return.php";
    $vnp_TmnCode = "JJHC9QFM"; //Mã website tại VNPAY 
    $vnp_HashSecret = "JFDMCNMJGUIXVQNHYKHPRDBGZHSPUEHZ"; //Chuỗi bí mật

    $vnp_TxnRef = rand(00, 9999); //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
    $vnp_OrderInfo = 'Nội dung thanh toán';
    $vnp_OrderType = 'billpayment';
    $vnp_Amount = tongdonhang() * 100;
    $vnp_Locale = 'vn';
    $vnp_BankCode = 'NCB';
    $vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
    $inputData = array(
        "vnp_Version" => "2.1.0",
        "vnp_TmnCode" => $vnp_TmnCode,
        "vnp_Amount" => $vnp_Amount,
        "vnp_Command" => "pay",
        "vnp_CreateDate" => date('YmdHis'),
        "vnp_CurrCode" => "VND",
        "vnp_IpAddr" => $vnp_IpAddr,
        "vnp_Locale" => $vnp_Locale,
        "vnp_OrderInfo" => $vnp_OrderInfo,
        "vnp_OrderType" => $vnp_OrderType,
        "vnp_ReturnUrl" => $vnp_Returnurl,
        "vnp_TxnRef" => $vnp_TxnRef
    );
    if (isset($vnp_BankCode) && $vnp_BankCode != "") {
        $inputData['vnp_BankCode'] = $vnp_BankCode;
    }
    ksort($inputData);
    $query = "";
    $i = 0;
    $hashdata = "";
    foreach ($inputData as $key => $value) {
        if ($i == 1) {
            $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
        } else {
            $hashdata .= urlencode($key) . "=" . urlencode($value);
            $i = 1;
        }
        $query .= urlencode($key) . "=" . urlencode($value) . '&';
    }

    $vnp_Url = $vnp_Url . "?" . $query;
    if (isset($vnp_HashSecret)) {
        $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret); //  
        $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
    }
    $returnData = array(
        'code' => '00', 'message' => 'success', 'data' => $vnp_Url
    );
    if (isset($_POST['dongydathang'])) {
        header('Location: ' . $vnp_Url);
        die();
    } else {
        echo json_encode($returnData);
    }
}
?>        