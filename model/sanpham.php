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

?>