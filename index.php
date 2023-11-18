<?php
include "model/pdo.php";
include "model/sanpham.php";
include "model/danhmuc.php";
include "view/header.php";
include "model/color.php";
include "global.php";
$spnb = loadall_sanpham_home_noibatnhat();
$spmoi = loadall_sanpham_home_sanphammoi();
$sptragop = loadall_sanpham_home_tragop();
$spgiamgia = loadall_sanpham_home_giamgialon();
$spgiare = loadall_sanpham_home_giare();
$dsdm = loadall_danhmuc();
$dsdm_header = loadall_danhmuc_header();
$dsmau = loadall_color();
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
        case 'giohang':
            include "view/dungchung.php";
            include "view/giohang.php";
            break;
        case 'sanpham':
            include "view/dungchung.php";
            include "view/boloc.php";
            $allsp = loadall_dssanpham();
            include "view/sanpham.php";
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
            include "view/boloc.php";
            if (isset($_GET['iddm']) && ($_GET['iddm'] > 0)) {
                $iddm = $_GET['iddm'];
                $dssp = loadall_sanpham("", $iddm);
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