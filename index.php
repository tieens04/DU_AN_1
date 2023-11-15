<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "global.php";
$spnb = loadall_sanpham_home_noibatnhat();
$spmoi = loadall_sanpham_home_sanphammoi();
$sptragop = loadall_sanpham_home_tragop();
$spgiamgia = loadall_sanpham_home_giamgialon();
$spgiare = loadall_sanpham_home_giare();
$dsdm = loadall_danhmuc();
$dssp=loadall_dssanpham();
$dsdm_header = loadall_danhmuc_header();
if (isset($_GET['act']) && ($_GET['act'] != "")) {
    $act = $_GET['act'];
    switch ($act) {
        case 'tintuc':
            include "view/tintuc.php";
            break;
        case 'tuyendung':
            include "view/tuyendung.php";
            break;
        case 'gioithieu':
            include "view/gioithieu.php";
            break;
        case 'baohanh':
            include "view/trungtambaohanh.php";
            break;
        case 'lienhe':
            include "view/lienhe.php";
            break;
        case 'giohang':
            include "view/giohang.php";
            break;
        case 'sanpham':
            
            $allsp = loadall_dssanpham();
            include "view/sanpham.php";
            break;
        case 'chitietsanpham':
            if (isset($_GET['idsp']) && ($_GET['idsp'] > 0)) {
                $id = $_GET['idsp'];
                $sp_cungloai = loadall_sanpham_cungloai($id);
                $onesp = loadone_sanpham($id);
                extract($onesp);
                include "view/chitietsanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'dssanpham':
            if (isset($_POST['timkiem']) && ($_POST['timkiem'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
            }
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham($kyw, $iddm);
                $tendm = load_tendm($iddm);
                include "view/dssanpham.php";
            } else {
                include "view/home.php";
            }
            break;
        case 'nguoidung':
            include "view/nguoidung.php";
            break;

        default:
            include "view/home.php";
            break;
    }

} else {
    include "view/home.php";
}


include "view/footer.php";
?>