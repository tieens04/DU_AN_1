<?php 
ob_start(); 
    session_start();
    include "model/pdo.php";
    include "model/sanpham.php";
    include "model/danhmuc.php";
    include "model/taikhoan.php";
    include "view/header.php";
    include "view/global.php";
    $spnb = loadall_sanpham_home_noibatnhat();
    $spmoi = loadall_sanpham_home_sanphammoi();
    $sptragop = loadall_sanpham_home_tragop();
    $spgiamgia = loadall_sanpham_home_giamgialon();
    $spgiare = loadall_sanpham_home_giare();
    $dsdm = loadall_danhmuc();
    $dssp = loadall_dssanpham();
    $dsdm_header = loadall_danhmuc_header();
    
    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){


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


                    
            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    echo "<script>alert('Đăng ký thành công!');</script>";
                        include "view/dungchung.php";
                        include "view/home.php";
                }
                
                break;

            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;

                        header('Location:index.php');
                    }
                    else{
                        
                        echo "<script>alert('User hoặc Password đã sai.Vui lòng nhập lại!');</script>";
                        include "view/dungchung.php";
                        include "view/home.php";
                        
                    }
                    
                }
                // include "view/taikhoan/dangnhap.php";
                // include "view/taikhoan/dangky.php";
                break;    
                

            case 'edit_taikhoan':
                if(isset($_POST['capnhat'])&&($_POST['capnhat'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $email=$_POST['email'];
                    $address=$_POST['address'];
                    $tel=$_POST['tel'];
                    $id=$_POST['id'];

                    update_taikhoan($id,$user,$pass,$email,$address,$tel);
                    $_SESSION['user']=checkuser($user,$pass);
                    header('Location: index.php?act=edit_taikhoan');
                        
                }
                include "view/dungchung.php";
                include "view/taikhoan/edit_taikhoan.php";
                break;

                case 'quenmk':
                    if(isset($_POST['guiemail'])&&($_POST['guiemail'])){
                        $email=$_POST['email'];
                        $tel=$_POST['tel'];
                                
                        $checkemail=checkemail($email,$tel);                         
                        if(is_array($checkemail)){
                            $thongbao="Mật khẩu của bạn là: ".$checkemail['pass'];
                        }else{
                            $thongbao="Email và số điện thoại này không tồn tại";
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
    }else{
        include "view/dungchung.php";
        include "view/home.php";
    }
    include "view/footer.php";
    ob_end_flush();
?>