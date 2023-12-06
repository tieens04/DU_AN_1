
<?php
function viewcart($del)
{
    global $img_path;
    $tong = 0;
    $i = 0;
    $tong_thanh_tien = 0; // Tổng thành tiền của các sản phẩm trong giỏ hàng

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

        $gia_giam = $cart[3] * $cart[5] / 100; // Tính giá giảm theo phần trăm khuyến mãi
        $gia_sau_giam = $cart[3] - $gia_giam; // Giá sau khi đã giảm giá
        $thanh_tien = $gia_sau_giam * $cart[4] ; // Thành tiền của từng sản phẩm trong giỏ hàng

        $gia_giam_format = number_format($gia_giam, 0, ".", ".") . '₫';
        $gia_sau_giam_format = number_format($gia_sau_giam, 0, ".", ".") . '₫';
        $thanh_tien_format = number_format($thanh_tien, 0, ".", ".") . '₫';

        $tong_thanh_tien += $thanh_tien; // Cộng vào tổng thành tiền

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
                <td>' . $gia_giam_format . '</td>
                <td>' . $thanh_tien_format . '</td>
                ' . $xoasp_td . '
            </tr>';
        $i++;
    }
    $tong_thanh_tien_format = number_format($tong_thanh_tien, 0, ".", ".") . '₫'; // Format lại tổng thành tiền

    if ($del == 1) {
        $xoasp_tc = '<td><a href="index.php?act=delcart"> 
        <i class="fa fa-trash-o" aria-hidden="true"></i> Xóa hết </a></td>';
    } else {
        $xoasp_tc = '';
    }

    // Hiển thị tổng thành tiền của giỏ hàng
    echo '<tr>
            <td colspan="6">Tổng đơn hàng</td>
            <td colspan="1">' . $tong_thanh_tien_format . '</td>
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
            <th>Khuyến mãi</th>
            <th>Thành tiền</th> 
            </tr>';
    foreach ($listbill as $cart) {
        $hinh = $img_path . $cart['img'];
        $gia_giam = $cart['price'] * $cart['khuyenmai'] / 100; // Tính giá giảm theo phần trăm khuyến mãi
        $gia_sau_giam = $cart['price'] - $gia_giam; // Giá sau khi đã giảm giá
        $gia_giam_format = number_format($gia_giam, 0, ".", ".") . '₫';
        $gia_sau_giam_format = number_format($gia_sau_giam, 0, ".", ".") . '₫';
        
        // Tính tổng giá trị đơn hàng
        $tong += $gia_sau_giam;

        echo '<tr>  
        <td><img src="' . $hinh . '" alt="" height="80px"></td>
        <td>' . $cart['name'] . '</td>
        <td>' . number_format($cart['price'], 0, ".", ".") . '₫</td>
        <td>' . $cart['soluong'] . '</td>
        <td>' . $gia_giam_format . '</td>
        <td>' . $gia_sau_giam_format . '</td>
        </tr>';
        $i += 1;
    }
    
    // Hiển thị tổng giá trị đơn hàng
    echo '<tr style="height: 50px;">
            <td colspan="4">Tổng đơn hàng</td>
            <td></td>
            <td>' . number_format($tong, 0, ".", ".") . '₫</td>
          </tr>';
}



function tongdonhang()
{
    $tong = 0;

    foreach ($_SESSION['mycart'] as $cart) {
        $gia_giam = $cart[3] * $cart[5] / 100; // Tính giá giảm theo phần trăm khuyến mãi
        $gia_sau_giam = $cart[3] - $gia_giam; // Giá sau khi đã giảm giá
        $ttien = $gia_sau_giam * $cart[4]; // Thành tiền của mỗi sản phẩm với số lượng
        $tong += $ttien; // Cộng vào tổng đơn hàng
    }

    return $tong;
}

function insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang)
{
    $sql = "INSERT INTO bill(iduser,bill_name,bill_email,bill_address,bill_tel,bill_pttt,ngaydathang,total) values('$iduser','$name','$email','$address','$tel','$pttt','$ngaydathang','$tongdonhang')";
    return pdo_execute_return_lastInsertId($sql);
}
function insert_cart($iduser, $idpro, $img, $name, $price, $soluong,$khuyenmai ,$thanhtien, $idbill)
{
    $sql = "INSERT INTO cart(iduser,idpro,img,name,price,soluong,khuyenmai,thanhtien,idbill) values('$iduser','$idpro','$img','$name','$price','$soluong','$khuyenmai','$thanhtien','$idbill')";
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
function loadall_bill($kyw,$iduser=0)
{
    $sql = "SELECT * FROM bill WHERE 1";
    if ($iduser > 0)
    $sql .= " AND iduser=" . $iduser;
    if($kyw!="")
    $sql .= " AND id like '%".$kyw."%'";
    $sql .= " ORDER BY id DESC";
    $listbill = pdo_query($sql);
    return $listbill;
}
function delete_bill($id){
    // Kiểm tra trạng thái của đơn hàng trước khi xóa
    $bill_status = pdo_query_value("SELECT bill_status FROM bill WHERE id = ?", [$id]);

    // Chỉ cho phép cập nhật trạng thái nếu đơn hàng ở trạng thái mới (0 hoặc 1)
    if ($bill_status == 0 || $bill_status == 1) {
        // Thay đổi trạng thái của đơn hàng thành trạng thái đã hủy (ví dụ: 4 là trạng thái đã hủy)
        $sql = "UPDATE bill SET bill_status = 4 WHERE id = ?";
        pdo_execute($sql, [$id]);
    } else {
        // Nếu không ở trạng thái mới, không cho phép cập nhật trạng thái
        // Có thể cung cấp thông báo hoặc xử lý tùy thuộc vào yêu cầu của bạn
        echo "Không thể cập nhật trạng thái của đơn hàng này.";
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
        case '4':
            $tt = "Đã hủy";
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
    // Lấy tổng doanh thu
    $sql_revenue = "SELECT SUM(cart.thanhtien) AS total_revenue
                    FROM cart";
    $total_revenue = pdo_query_value($sql_revenue);

    // Lấy sản phẩm bán chạy nhất
    $sql_top_product = "SELECT cart.idpro AS idsp,
                               sanpham.name AS tensp,
                               SUM(cart.soluong) AS sold_quantity
                        FROM cart
                        INNER JOIN sanpham ON cart.idpro = sanpham.id
                        GROUP BY cart.idpro
                        ORDER BY sold_quantity DESC
                        LIMIT 1"; // Chỉ lấy 1 sản phẩm đầu tiên
    $top_product = pdo_query_one($sql_top_product);

    // Tính tổng số lượng sản phẩm đã bán
    $sql_total_sold = "SELECT SUM(soluong) AS total_sold
                       FROM cart";
    $total_sold = pdo_query_value($sql_total_sold);

    $thongke = [
        'total_revenue' => $total_revenue,
        'top_product' => $top_product,
        'total_sold_quantity' => $total_sold // Thêm thông tin tổng số lượng sản phẩm đã bán vào mảng kết quả
    ];

    return $thongke;
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