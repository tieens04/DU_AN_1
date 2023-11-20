<?php
session_start();
ob_start();
if (!isset($_SESSION['mycart'])) // nếu session này tồn tại 
    $_SESSION['mycart']= array();
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "model/cart.php";
include "view/header.php";
include "global.php";
 // thì session này = 1 mảng mới
$spnb = loadall_sanpham_home_noibatnhat();
$spmoi = loadall_sanpham_home_sanphammoi();
$sptragop = loadall_sanpham_home_tragop();
$spgiamgia = loadall_sanpham_home_giamgialon();
$spgiare = loadall_sanpham_home_giare();
$dsdm = loadall_danhmuc();
$dssp = loadall_dssanpham();
$dsdm_header = loadall_danhmuc_header();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
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
                    $fg=0;
                    $ttien = $soluong * $price;
                    
                    if(isset($_SESSION['mycart'])&&(count($_SESSION['mycart'])>0)){
                        $i=0;
                        foreach ($_SESSION['mycart'] as $cart) {
                          if($cart[0]==$id){
                            //cập nhật mới số lượng
                            $soluong+=$cart[4];
                            $fg=1;
                            //cập nhật số lượng mới vào giỏ hàng
                            $_SESSION['mycart'][$i][4]=$soluong;
                            break;
                          }
                          $i++;
                        }
                      }
                      //khi số lượng ban đầu không thay đổi thì thêm mới sp vào giỏ hàng
                      if($fg==0){
                        $spadd = [$id, $name, $img, $price, $soluong, $ttien];
                    $_SESSION['mycart'][]= $spadd;
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
                include "view/viewcart.php";
                break;
            case 'viewcart':
                
                include "view/dungchung.php";
                include "view/viewcart.php";
                break;
        case 'sanpham':
            include "view/dungchung.php";
            $allsp = loadall_dssanpham();
            include "view/sanpham.php";
            break;
        case 'timkiem':
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            $tk=loadall_sanpham($kyw);
            include "view/dungchung.php";
            include "view/sanphamtimkiem.php";
            break;
        case 'chitietsanpham':

            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $sp_cungloai = loadall_sanpham_cungloai($id);
                $onesp = loadone_sanpham($id);
                extract($onesp);
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
                $dssp = loadall_sanpham("",$iddm);
                $tendm = load_tendm($iddm);
                include "view/dssanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'nguoidung':
            include "view/dungchung.php";
            include "view/nguoidung.php";
            break;
            case 'thoat':
                session_unset(); //xóa hết session và trở về trang chủ
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
?>