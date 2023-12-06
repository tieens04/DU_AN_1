<?php
ob_start();
session_start();

date_default_timezone_set('Asia/Ho_Chi_Minh');
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/taikhoan.php";
include "model/cart.php";
include "model/bonho.php";
include "model/mau.php";
include "view/header.php";
include "view/global.php";
if (!isset($_SESSION['mycart']))
    $_SESSION['mycart'] = [];

$spnb = loadall_sanpham_home_noibatnhat();
$spmoi = loadall_sanpham_home_sanphammoi();
$sptragop = loadall_sanpham_home_tragop();
$spgiamgia = loadall_sanpham_home_giamgialon();
$spgiare = loadall_sanpham_home_giare();
$dsdm = loadall_danhmuc();
$dssp = loadall_dssanpham();
$dsdm_header = loadall_danhmuc_header();

if ((isset($_GET['act'])) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {


        case 'tintuc':
            include "view/dungchung.php";
            include "view/tintuc.php";
            break;
        case 'tuyendung':
            include "view/dungchung.php";
            include "view/tuyendung.php";
            break;
        case 'gioithieu':
            include "view/dungchung.php";
            include "view/gioithieu.php";
            break;
        case 'baohanh':
            include "view/dungchung.php";
            include "view/trungtambaohanh.php";
            break;
        case 'lienhe':
            include "view/dungchung.php";
            include "view/lienhe.php";
            break;
        case 'addtocart':
            if (isset($_POST['addtocart']) && ($_POST['addtocart'])) { // nếu tồn tại và được click thì
                $id = $_POST['id'];
                $name = $_POST['name'];
                $img = $_POST['img'];
                $price = $_POST['price'];
                $soluong = 1;
                $giatrikhuyenmai = $_POST['gia_tri_khuyen_mai'];
                $fg = 0;
                $ttien = $soluong * $price - $giatrikhuyenmai;
                if (isset($_SESSION['mycart']) && (count($_SESSION['mycart']) > 0)) {
                    $i = 0;
                    foreach ($_SESSION['mycart'] as $cart) {
                        if ($cart[0] == $id) {
                            //cập nhật mới số lượng
                            $soluong += $cart[4];
                            $fg = 1;
                            //cập nhật số lượng mới vào giỏ hàng
                            $_SESSION['mycart'][$i][4] = $soluong;
                            break;
                        }
                        $i++;
                    }
                }
                //khi số lượng ban đầu không thay đổi thì thêm mới sp vào giỏ hàng
                if ($fg == 0) {
                    $spadd = [$id, $name, $img, $price, $soluong, $giatrikhuyenmai, $ttien];
                    array_push($_SESSION['mycart'], $spadd);
                }
                header('location: index.php?act=viewcart');
            }
            include "view/dungchung.php";
            //include "view/viewcart.php";
            break;
        case 'delcart':
            if (isset($_GET['idcart'])) {
                $idcart = $_GET['idcart']; //Nếu 'idcart' đã được gửi, giá trị sẽ được lưu vào biến $idcart để sử dụng sau này.
                array_splice($_SESSION['mycart'], $idcart, 1); //array_splice để loại bỏ phần tử từ một mảng.
                //$idcart là vị trí của phần tử trong mảng cần bỏ.
                //1 nghĩa là chỉ loại bỏ một phần tử.   
            } else {
                $_SESSION['mycart'] = [];
            }
            include "view/dungchung.php";
            include "view/cart/viewcart.php";
            break;
        case 'viewcart':
            if (isset($_POST['bill']) && ($_POST['bill'])) {
                if (isset($_SESSION['user'])) {
                    header('Location:index.php?act=bill');
                    exit(); // Đảm bảo kết thúc kịch bản sau khi chuyển hướng
                } else {
                    $thongbao = "Vui lòng đăng nhập để tiếp tục thanh toán";
                }
            }
            include "view/dungchung.php";
            include "view/cart/viewcart.php";
            break;


        case 'bill':
            include "view/dungchung.php";
            include "view/cart/bill.php";
            break;
            
        case 'delete':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_bill($_GET['id']);
            }
            $listbill = loadall_bill(0);
            include "view/dungchung.php";
            include "view/taikhoan/edit_taikhoan.php";
            break;
        case 'billcomfirm':
            if (isset($_POST['dongydathang']) && ($_POST['dongydathang'])) {
                if (isset($_SESSION['user'])) {
                    $iduser = $_SESSION['user']['id'];
                } else {
                    $id = 0;
                }

                $name = $_POST['name'];
                $email = $_POST['email'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $pttt = $_POST['pttt'];
                $ngaydathang = date('h:i:sa d/m/Y');
                $tongdonhang = tongdonhang();

                //tạo bill
                $idbill = insert_bill($iduser, $name, $email, $address, $tel, $pttt, $ngaydathang, $tongdonhang);
                // nhập cart
                foreach ($_SESSION['mycart'] as $cart) {
                    insert_cart($_SESSION['user']['id'], $cart[0], $cart[2], $cart[1], $cart[3], $cart[4], $cart[6], $idbill);
                }

                if ($pttt == 3) {
                    check_out();
                }
                $_SESSION['mycart'] = []; //xóa session cart
                $bill = loadone_bill($idbill);
                $bill_ct = loadall_cart($idbill);

                include "view/dungchung.php";
                include "view/cart/billcomfirm.php";
            }
            //show

            break;


        case 'sanpham':
            include "view/dungchung.php";
            include "view/boloc.php";
            $allsp = loadall_dssanpham();
            include "view/sanpham.php";
            break;
        case 'sanphamct':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cung_loai = load_sanpham_cungloai($id, $iddm);
                include "../view/sanphamct.php";
            } else {
                include "../view/home.php";
            }

            break;
        case 'sanphamduoi2tr':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_duoi2tr = loadall_sanpham_duoi2tr();
            include "view/spduoi2tr.php";
            break;
        case 'sanphamtu2den4':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_tu2_4 = loadall_sanpham_tu_2_4();
            include "view/sptu2den4.php";
            break;
        case 'sanphamtu4den7':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_tu4_7 = loadall_sanpham_tu_4_7();
            include "view/sptu4den7.php";
            break;
        case 'sanphamtu7den13':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_tu7_13 = loadall_sanpham_tu_7_13();
            include "view/sptu7den13.php";
            break;
        case 'sanphamtren13':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_tren_13 = loadall_sanpham_tren_13();
            include "view/sptren13.php";
            break;
        case 'spgiamgia':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_giamgia = loadall_sanpham_home_giamgialon();
            include "view/spgiamgia.php";
            break;
        case 'sptragop':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_tragop = loadall_sanpham_home_tragop();
            include "view/sptragop.php";
            break;
        case 'spmoiramat':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_moiramat = loadall_sanpham_home_sanphammoi();
            include "view/spmoiramat.php";
            break;
        case 'spgiareonline':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_giareonline = loadall_sanpham_home_giare();
            include "view/spgiareonline.php";
            break;
        case 'spmau':
            include "view/dungchung.php";
            include "view/boloc.php";
            if (isset($_GET['idmau']) && ($_GET['idmau'] > 0)) {
                $idmau = $_GET['idmau'];
                $tenmau = load_tenmau($idmau);
                $sp_mau = loadall_sanpham_mauxanh($idmau);
                include "view/spmau.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'spgiatangdan':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_giatangdan = loadall_sanpham_gia_tangdan();
            include "view/spgiatangdan.php";
            break;
        case 'spgiagiamdan':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_giagiamdan = loadall_sanpham_gia_giamdan();
            include "view/spgiagiamdan.php";
            break;
        case 'spdanhgiatang':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_danhgiatang = loadall_sanpham_danhgia_tang();
            include "view/spdanhgiatang.php";
            break;
        case 'spdanhgiagiam':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_danhgiagiam = loadall_sanpham_danhgia_giam();
            include "view/spdanhgiagiam.php";
            break;
        case 'spa_z':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_adenz = loadall_sanpham_adenz();
            include "view/spadenz.php";
            break;
        case 'spz_a':
            include "view/dungchung.php";
            include "view/boloc.php";
            $sp_zdena = loadall_sanpham_zdena();
            include "view/spzdena.php";
            break;
        case 'timkiem':
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $tk = loadall_sanpham($kyw);
            include "view/dungchung.php";
            include "view/sanphamtimkiem.php";
            break;
        case 'chitietsanpham':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $onesp = loadone_sanpham($id);
                extract($onesp);
                $sp_cungloai = loadall_sanpham_cungloai($id, $iddm);
                include "view/dungchung.php";
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }

            break;
        case 'dssanpham':
            include "view/dungchung.php";

            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham("", $iddm);
                $tendm = load_tendm($iddm);
                include "view/dssanpham.php";
            } else {
                include "view/home.php";
            }
            break;



        case 'dangky':
            if (isset($_POST['dangky']) && ($_POST['dangky'])) {
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                insert_taikhoan($email, $user, $pass);
                echo "<script>alert('Đăng ký thành công!');</script>";
                include "view/dungchung.php";
                include "view/home.php";
            }

            break;

        case 'dangnhap':
            if (isset($_POST['dangnhap']) && ($_POST['dangnhap'])) {
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $checkuser = checkuser($user, $pass);
                if (is_array($checkuser)) {
                    $_SESSION['user'] = $checkuser;
                    // header('Location:index.php');
                    if (isset($_SERVER['HTTP_REFERER'])) {
                        header('Location: ' . $_SERVER['HTTP_REFERER']);
                    } else {
                        header('Location:index.php');
                    }
                } else {

                    echo "<script>alert('User hoặc Password đã sai.Vui lòng nhập lại!');</script>";
                }
                include "view/dungchung.php";
                include "view/home.php";
            }
            // include "view/taikhoan/dangnhap.php";
            // include "view/taikhoan/dangky.php";
            break;


        case 'edit_taikhoan':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $name = $_POST['name'];
                $email = $_POST['email'];
                $user = $_POST['user'];
                $pass = $_POST['pass'];
                $address = $_POST['address'];
                $tel = $_POST['tel'];
                $id = $_POST['id'];
                $checkuser = checkuser($user, $pass);
                update_taikhoan($id, $user, $pass, $email, $address, $tel);
                $_SESSION['user'] = checkuser($user, $pass);
                header('Location: index.php?act=edit_taikhoan');
            }
            
            $listbill = loadall_bill($_SESSION['user']['id']);
            include "view/dungchung.php";
            include "view/taikhoan/edit_taikhoan.php";
            break;

        case 'quenmk':
            if (isset($_POST['guiemail']) && ($_POST['guiemail'])) {
                $email = $_POST['email'];
                $tel = $_POST['tel'];

                $checkemail = checkemail($email, $tel);
                if (is_array($checkemail)) {
                    $thongbao = "Mật khẩu của bạn là: " . $checkemail['pass'];
                } else {
                    $thongbao = "Email và số điện thoại này không tồn tại";
                }
            }
            include "view/dungchung.php";
            include "view/taikhoan/quenmk.php";
            break;

        case 'thoat':
            session_unset();
            header('Location: index.php');
            break;

        default:
            include "view/home.php";
            break;
    }
} else {
    include "view/dungchung.php";
    include "view/home.php";
}
include "view/footer.php";
ob_end_flush();
