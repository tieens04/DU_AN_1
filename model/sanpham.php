<?php
function loadall_sanpham_home_sanphammoi()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home_noibatnhat()
{
    $sql = "select * from sanpham where danh_gia > 300 order by id desc limit 0,5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home_tragop()
{
    $sql = "select * from sanpham where so_luong <= 50 order by id desc limit 0,5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home_giamgialon()
{
    $sql = "select * from sanpham where gia_tri_khuyen_mai > 1000000 order by id desc limit 0,5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home_giare()
{
    $sql = "select * from sanpham where price <= 5000000 order by id desc limit 0,5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_dssanpham()
{
    $sql = "select * from sanpham order by id desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_duoi2tr()
{
    $sql = "select * from sanpham where price < 2000000 order by id desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tu_2_4()
{
    $sql = "select * from sanpham where price between 2000000 and 4000000 order by id desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tu_4_7()
{
    $sql = "select * from sanpham where price between 4000000 and 7000000 order by id desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tu_7_13()
{
    $sql = "select * from sanpham where price between 7000000 and 13000000 order by id desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tren_13()
{
    $sql = "select * from sanpham where price > 13000000 order by id desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_mauxanh($idmau)
{
    $sql = "select * from sanpham where 1";
    if ($idmau > 0) {
        $sql .= " and idmau = '" . $idmau . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function loadall_sanpham_cungloai($id)
{
    $sql = "select * from sanpham where id <> " . $id;
    $sanpham = pdo_query($sql);
    return $sanpham;
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function insert_sanpham($tensp, $giasp, $hinh, $soluong, $iddm, $danhgia, $manhinh, $hedieuhanh, $camerasau, $cameratruoc, $cpu, $ram, $memory, $pin, $idsale, $idcolor, $giatrikhuyenmai)
{
    $sql = "INSERT INTO sanpham(name,price,img,so_luong,iddm,danh_gia,man_hinh,he_dieu_hanh,camera_truoc,camera_sau,cpu,ram,memory,pin,idkm,idmau,gia_tri_khuyen_mai) 
    values('$tensp','$giasp','$hinh','$soluong','$iddm','$danhgia','$manhinh','$hedieuhanh','$camerasau','$cameratruoc','$cpu','$ram','$memory','$pin','$idsale','$idcolor','$giatrikhuyenmai')";
    pdo_execute($sql);
}
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_gia_tangdan()
{
    $sql = "select * from sanpham order by price asc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_gia_giamdan()
{
    $sql = "select * from sanpham order by price desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_danhgia_tang()
{
    $sql = "select * from sanpham order by danh_gia asc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_danhgia_giam()
{
    $sql = "select * from sanpham order by danh_gia desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_adenz()
{
    $sql = "select * from sanpham order by name asc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_zdena()
{
    $sql = "select * from sanpham order by name desc limit 0,15";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

?>