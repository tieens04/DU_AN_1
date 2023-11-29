<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/sale.php";
include "../model/color.php";
include "../model/taikhoan.php";
include "../model/binhluan.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        /* Controller loại sản phẩm */
        case 'adddm':
            //Kiểm tra xem user có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenloai = $_POST['tenloai'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_danhmuc($tenloai, $target_file);
                $thongbao = "Them thanh cong";
            }
            include "danhmuc/add.php";
            break;
        case 'listdm':
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;
        case 'xoadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // kiểm tra id xem có tồn tại k nếu có và >0 thì delete
                delete_danhmuc($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc(); // delete xong thì hiển thị danh sách 
            include "danhmuc/list.php";
            break;

        case 'suadm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $dm = loadone_danhmuc($_GET['id']);
            }
            include "danhmuc/update.php";
            break;

        case 'updatedm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenloai = $_POST['tenloai'];
                update_danhmuc($id, $tenloai);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        /* Controller loại màu sản phẩm */
        case 'addcolor':
            //Kiểm tra xem user có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenmau = $_POST['tenmau'];
                insert_color($tenmau);
                $thongbao = "Them thanh cong";
            }
            include "color/add.php";
            break;

        case 'listcolor':
            $listcolor = loadall_color();
            include "color/list.php";
            break;
        case 'xoacolor':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // kiểm tra id xem có tồn tại k nếu có và >0 thì delete
                delete_color($_GET['id']);
            }
            $listcolor = loadall_color(); // delete xong thì hiển thị danh sách 
            include "color/list.php";
            break;


        case 'suacolor':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $color = loadone_color($_GET['id']);
            }
            include "color/update.php";
            break;

        case 'updatecolor':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenmau = $_POST['tenmau'];
                update_color($id, $tenmau);
                $thongbao = "Cap nhat thanh cong";
            }
            $listcolor = loadall_color();
            include "color/list.php";
            break;
        /* Controller sale */

        case 'addsale':
            //Kiểm tra xem user có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensale = $_POST['tensale'];
                insert_sale($tensale);
                $thongbao = "Them thanh cong";
            }
            include "sale/add.php";
            break;
        case 'listsale':
            $listsale = loadall_sale();
            include "sale/list.php";
            break;
        case 'xoasale':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // kiểm tra id xem có tồn tại k nếu có và >0 thì delete
                delete_sale($_GET['id']);
            }
            $listsale = loadall_sale(); // delete xong thì hiển thị danh sách 
            include "sale/list.php";
            break;

        case 'suasale':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sale = loadone_sale($_GET['id']);
            }
            include "sale/update.php";
            break;

        case 'updatesale':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tensale = $_POST['tensale'];
                update_sale($id, $tensale);
                $thongbao = "Cap nhat thanh cong";
            }
            $listsale = loadall_sale();
            include "sale/list.php";
            break;
        /* Controller sản phẩm */
        case 'addsp':
            //Kiểm tra xem user có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tensp = $_POST['tensp'];
                $iddm = $_POST['iddm'];
                $hinh = $_FILES['hinh']['name'];
                $giasp = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $danhgia = $_POST['danhgia'];
                $idsale = $_POST['idsale'];
                $idcolor = $_POST['idcolor'];
                $giatrikhuyenmai = $_POST['giatrikhuyenmai'];
                $manhinh = $_POST['manhinh'];
                $hedieuhanh = $_POST['hedieuhanh'];
                $cameratruoc = $_POST['cameratruoc'];
                $camerasau = $_POST['camerasau'];
                $cpu = $_POST['cpu'];
                $ram = $_POST['ram'];
                $pin = $_POST['dungluongpin'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($tensp, $giasp, $hinh, $soluong, $iddm, $danhgia, $manhinh, $hedieuhanh, $camerasau, $cameratruoc, $cpu, $ram, $pin, $idsale, $idcolor, $giatrikhuyenmai);
                $thongbao = "Them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsale = loadall_sale();
            $listcolor = loadall_color();
            // var_dump($listdanhmuc);
            include "sanpham/add.php";
            break;

        case 'listsp':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
                $iddm = $_POST['iddm'];
            } else {
                $kyw = '';
                $iddm = 0;
            }
            $listdanhmuc = loadall_danhmuc();
            $listcolor = loadall_color();
            $listsanpham = loadall_sanpham($kyw, $iddm);
            include "sanpham/list.php";
            break;

        case 'xoasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_sanpham($_GET['id']);
            }
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'suasp':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $sp = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listsale = loadall_sale();
            $listcolor = loadall_color();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tensp = $_POST['tensp'];
                $iddm = $_POST['iddm'];
                $hinh = $_FILES['hinh']['name'];
                $giasp = $_POST['gia'];
                $soluong = $_POST['soluong'];
                $danhgia = $_POST['danhgia'];
                $idsale = $_POST['idsale'];
                $idcolor = $_POST['id_color'];
                $giatrikhuyenmai = $_POST['giatrikhuyenmai'];
                $manhinh = $_POST['manhinh'];
                $hedieuhanh = $_POST['hedieuhanh'];
                $cameratruoc = $_POST['cameratruoc'];
                $camerasau = $_POST['camerasau'];
                $cpu = $_POST['cpu'];
                $ram = $_POST['ram'];
                $pin = $_POST['dungluongpin'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $tensp, $giasp, $hinh, $soluong, $danhgia, $manhinh, $hedieuhanh, $cameratruoc, $camerasau, $cpu, $ram, $pin, $giatrikhuyenmai);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listsale = loadall_sale();
            $listcolor = loadall_color();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;
        case 'dskh':
            $listtaikhoan = loadall_taikhoan();
            include "taikhoan/list.php";
            break;
        case 'dsbl':
            $listbinhluan = loadall_binhluan(0); //load tất cả thì cho số 0
            include "binhluan/list.php";
            break;
        case 'xoabl':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                delete_binhluan($_GET['id']);
            }
            $listbinhluan = loadall_binhluan("");
            include "binhluan/list.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>