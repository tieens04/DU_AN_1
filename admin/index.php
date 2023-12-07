<?php
include "../model/pdo.php";
include "../model/danhmuc.php";
include "../model/sanpham.php";
include "../model/khuyenmai.php";
include "../model/binhluan.php";
include "../model/mau.php";
include "../model/bonho.php";
include "../model/taikhoan.php";
include "../model/cart.php";
include "header.php";

if (isset($_GET['act'])) {
    $act = $_GET['act'];
    switch ($act) {
        /* Controller loại sản phẩm */
        case 'adddm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $maloai = $_POST['maloai'];
                $tenloai = $_POST['tenloai'];
                $target_dir = "../upload/";
        
                // Kiểm tra xem các trường có được điền đầy đủ hay không
                if (empty($maloai) || empty($tenloai) || empty($_FILES["img"]["name"])) {
                    $thongbao = "Vui lòng điền đầy đủ thông tin.";
                } else {
                    $target_file = $target_dir . basename($_FILES["img"]["name"]);
                    if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                        insert_danhmuc($tenloai, $target_file);
                        $thongbao = "Thêm thành công";
                    } else {
                        $thongbao = "Xảy ra lỗi khi tải lên file.";
                    }
                }
            }
            include "danhmuc/add.php";
            break;
        
        case 'listdm':
            if (isset($_POST['listok']) && ($_POST['listok'])) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = '';
                $id = 0;

            }
            $listdanhmuc = loadall_danhmuc($kyw);
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
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["img"]["name"]);
                if (move_uploaded_file($_FILES["img"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_danhmuc($id, $tenloai, $target_file);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            include "danhmuc/list.php";
            break;

        /* Controller loại màu sản phẩm */
        case 'addmau':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenmau = $_POST['tenmau'];
        
                // Kiểm tra xem trường 'tenmau' có trống hay không
                if (empty($tenmau)) {
                    $thongbao = "Vui lòng nhập tên màu.";
                } else {
                    insert_mau($tenmau);
                    $thongbao = "Thêm thành công";
                }
            }
            include "mau/add.php";
            break;
        

        case 'listmau':
            $listmau = loadall_mau();
            include "mau/list.php";
            break;
        case 'xoamau':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // kiểm tra id xem có tồn tại k nếu có và >0 thì delete
                delete_mau($_GET['id']);
            }
            $listmau = loadall_mau(); // delete xong thì hiển thị danh sách 
            include "mau/list.php";
            break;


        case 'suamau':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $mau = loadone_mau($_GET['id']);
            }
            include "mau/update.php";
            break;

        case 'updatemau':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenmau = $_POST['tenmau'];
                update_mau($id, $tenmau);
                $thongbao = "Cap nhat thanh cong";
            }
            $listmau = loadall_mau();
            include "mau/list.php";
            break;
        /* Controller khuyến mãi */

        case 'addkm':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenkhuyenmai = $_POST['tenkm'];
        
                // Kiểm tra xem trường 'tenkhuyenmai' có trống hay không
                if (empty($tenkhuyenmai)) {
                    $thongbao = "Vui lòng nhập tên khuyến mãi.";
                } else {
                    insert_khuyenmai($tenkhuyenmai);
                    $thongbao = "Thêm thành công";
                }
            }
            include "khuyenmai/add.php";
            break;
        
        case 'listkm':
            $listkhuyenmai = loadall_khuyenmai();
            include "khuyenmai/list.php";
            break;
        case 'xoakm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // kiểm tra id xem có tồn tại k nếu có và >0 thì delete
                delete_khuyenmai($_GET['id']);
            }
            $listkhuyenmai = loadall_khuyenmai(); // delete xong thì hiển thị danh sách 
            include "khuyenmai/list.php";
            break;

        case 'suakm':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $khuyenmai = loadone_khuyemai($_GET['id']);
            }
            include "khuyenmai/update.php";
            break;

        case 'updatekm':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenkhuyenmai = $_POST['tenkm'];
                update_khuyenmai($id, $tenkhuyenmai);
                $thongbao = "Cap nhat thanh cong";
            }
            $listkhuyenmai = loadall_khuyenmai();
            include "khuyenmai/list.php";
            break;
        /* Controller bộ nhớ */
        case 'addbonho':
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $tenbonho = $_POST['tenbonho'];
        
                // Kiểm tra xem trường 'tenbonho' có trống hay không
                if (empty($tenbonho)) {
                    $thongbao = "Vui lòng nhập tên bộ nhớ.";
                } else {
                    insert_bonho($tenbonho);
                    $thongbao = "Thêm thành công";
                }
            }
            include "bonho/add.php";
            break;

        case 'listbonho':
            $listbonho = loadall_bonho();
            include "bonho/list.php";
            break;
        case 'xoabonho':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) { // kiểm tra id xem có tồn tại k nếu có và >0 thì delete
                delete_bonho($_GET['id']);
            }
            $listbonho = loadall_bonho(); // delete xong thì hiển thị danh sách 
            include "bonho/list.php";
            break;

        case 'suabonho':
            if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                $bonho = loadone_bonho($_GET['id']);
            }
            include "bonho/update.php";
            break;

        case 'updatebonho':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $tenbonho = $_POST['tenbonho'];
                update_bonho($id, $tenbonho);
                $thongbao = "Cap nhat thanh cong";
            }
            $listbonho = loadall_bonho();
            include "bonho/list.php";
            break;
        /* Controller sản phẩm */
        case 'addsp':
            //Kiểm tra xem user có click vào nút add hay ko
            if (isset($_POST['themmoi']) && ($_POST['themmoi'])) {
                $iddm = $_POST['iddm'];
                $idkm = $_POST['idkm'];
                $idmau = $_POST['idmau'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $soluong = $_POST['soluong'];
                $danhgia = $_POST['danhgia'];
                $manhinh = $_POST['manhinh'];
                $hedieuhanh = $_POST['hedieuhanh'];
                $cameratruoc = $_POST['cameratruoc'];
                $camerasau = $_POST['camerasau'];
                $cpu = $_POST['cpu'];
                $ram = $_POST['ram'];
                $pin = $_POST['pin'];
                $idbonho = $_POST['idbonho'];
                $giatrikhuyenmai = $_POST['giatrikhuyenmai'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                insert_sanpham($iddm, $idkm, $idmau, $tensp, $giasp, $hinh, $soluong, $danhgia, $manhinh, $hedieuhanh, $cameratruoc, $camerasau, $cpu, $ram, $pin, $idbonho, $giatrikhuyenmai);
                $thongbao = "Them thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listkhuyenmai = loadall_khuyenmai();
            $listmau = loadall_mau();
            $listbonho = loadall_bonho();
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
                $sanpham = loadone_sanpham($_GET['id']);
            }
            $listdanhmuc = loadall_danhmuc();
            $listkhuyenmai = loadall_khuyenmai();
            $listmau = loadall_mau();
            $listbonho = loadall_bonho();
            include "sanpham/update.php";
            break;
        case 'updatesp':
            if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                $id = $_POST['id'];
                $iddm = $_POST['iddm'];
                $idkm = $_POST['idkm'];
                $idmau = $_POST['idmau'];
                $tensp = $_POST['tensp'];
                $giasp = $_POST['giasp'];
                $hinh = $_FILES['hinh']['name'];
                $soluong = $_POST['soluong'];
                $danhgia = $_POST['danhgia'];
                $manhinh = $_POST['manhinh'];
                $hedieuhanh = $_POST['hedieuhanh'];
                $cameratruoc = $_POST['cameratruoc'];
                $camerasau = $_POST['camerasau'];
                $cpu = $_POST['cpu'];
                $ram = $_POST['ram'];
                $pin = $_POST['pin'];
                $idbonho = $_POST['idbonho'];
                $giatrikhuyenmai = $_POST['giatrikhuyenmai'];
                $target_dir = "../upload/";
                $target_file = $target_dir . basename($_FILES["hinh"]["name"]);
                if (move_uploaded_file($_FILES["hinh"]["tmp_name"], $target_file)) {
                    //echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
                } else {
                    //echo "Sorry, there was an error uploading your file.";
                }
                update_sanpham($id, $iddm, $idkm, $idmau, $tensp, $giasp, $hinh, $soluong, $danhgia, $manhinh, $hedieuhanh, $cameratruoc, $camerasau, $cpu, $ram, $pin, $idbonho, $giatrikhuyenmai);
                $thongbao = "Cap nhat thanh cong";
            }
            $listdanhmuc = loadall_danhmuc();
            $listkhuyenmai = loadall_khuyenmai();
            $listmau = loadall_mau();
            $listbonho = loadall_bonho();
            $listsanpham = loadall_sanpham("", 0);
            include "sanpham/list.php";
            break;

        /* Controller danh sách khách hàng */
        case 'dskh':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listtaikhoan = loadall_taikhoan($kyw,0);
            include "taikhoan/list.php";
            break;
        /* Controller tài khoản */

        /* Controller bill */
        case 'listbill':
            if (isset($_POST['kyw']) && ($_POST['kyw'] != "")) {
                $kyw = $_POST['kyw'];
            } else {
                $kyw = "";
            }
            $listbill = loadall_bill($kyw,0);
            include "bill/listbill.php";
            break;

            case 'trangthai':
                include "bill/trangthai.php";
                break;
            case 'updatetrangthai':
                    if (isset($_POST['capnhat']) && ($_POST['capnhat'])) {
                        $id_donhang = $_POST['id'];
                        $trangthai_moi = $_POST['trangthai'];
                        // Sử dụng prepared statement để cập nhật trạng thái đơn hàng
                        update_bill_status($id_donhang, $trangthai_moi);
                
                        // Hiển thị thông báo cập nhật thành công
                        $thongbao = "Cập nhật trạng thái đơn hàng thành công";
                    }
                    $listbill = loadall_bill(0);
                    include "bill/listbill.php";
                    break;
                    case 'huydonhang':
                        if (isset($_GET['id']) && ($_GET['id'] > 0)) {
                            // Cập nhật trạng thái đơn hàng thành trạng thái hủy (ví dụ: 4 là trạng thái hủy)
                            delete_bill($_GET['id']);
                        }
                        $listbill = loadall_bill(0);
                        include "bill/listbill.php";
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
        case 'thongke':
            $listthongke = loadall_thongke();
            include "thongke/list.php";
            break;
        case 'bieudo':
            $listthongke = loadall_thongke();
            include "thongke/bieudo.php";
            break;
    }
} else {
    include "home.php";
}

include "footer.php";
?>