<?php 
ob_start(); 
    session_start();
    include "model/pdo.php";
    include "model/taikhoan.php";
    include "view/header.php";
    


    if((isset($_GET['act']))&&($_GET['act']!="")){
        $act=$_GET['act'];
        switch($act){

            case 'dangky':
                if(isset($_POST['dangky'])&&($_POST['dangky'])){
                    $email=$_POST['email'];
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    insert_taikhoan($email,$user,$pass);
                    $thongbao="Đã đăng ký thành công. Vui lòng đăng nhập!";
                }
                include "view/taikhoan/dangky.php";
                break;

            case 'dangnhap':
                if(isset($_POST['dangnhap'])&&($_POST['dangnhap'])){
                    $user=$_POST['user'];
                    $pass=$_POST['pass'];
                    $checkuser=checkuser($user,$pass);
                    if(is_array($checkuser)){
                        $_SESSION['user']=$checkuser;

                        header('Location:index.php');
                    }else{
                        $thongbao="Nhập sai user hoặc mật khẩu. Vui lòng nhập lại!";
                    }
                    
                }
                include "view/taikhoan/dangnhap.php";
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
        include "view/home.php";
    }
    include "view/footer.php";
    ob_end_flush();
?>