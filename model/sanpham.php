<?php
function insert_sanpham($iddm, $idkm, $idmau, $tensp, $giasp, $hinh,$soluong,$danhgia,$manhinh,$hedieuhanh,$cameratruoc,$camerasau,$cpu,$ram,$pin,$memory,$giatrikhuyenmai)
{
    $sql = "INSERT INTO sanpham(iddm,idkm,idmau,name,price,img,so_luong,danh_gia,man_hinh,he_dieu_hanh,camera_truoc,camera_sau,cpu,ram,pin,memory,gia_tri_khuyen_mai) 
    values('$iddm', '$idkm', '$idmau', '$tensp', '$giasp', '$hinh','$soluong','$danhgia','$manhinh','$hedieuhanh','$cameratruoc','$camerasau','$cpu','$ram','$pin','$memory','$giatrikhuyenmai')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham_top10()
{
    $sql = "select * from sanpham where 1 order by luotxem desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0,$idkm = 0,$idmau = 0)
{
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    if ($idkm > 0) {
        $sql .= " and idkm = '" . $idkm . "'";
    }
    if ($idmau > 0) {
        $sql .= " and idmau = '" . $idmau . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from sanpham where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name; //trả về tên dm
    } else {
        return "";
    }

}
function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sanpham where iddm=" . $iddm . " AND id <>" . $id; //cùng danh mục nma khác id,<> là khác với dữ liệu hiện tại
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $idkm, $idmau, $tensp, $giasp, $hinh,$soluong,$danhgia,$manhinh,$hedieuhanh,$cameratruoc,$camerasau,$cpu,$ram,$pin,$memory,$giatrikhuyenmai)
{
    if ($hinh != "") {
        $sql = "update sanpham set iddm='" . $iddm . "', idkm='" . $idkm . "', idmau='" . $idmau . "', name='" . $tensp . "', price='" . $giasp . "', img='" . $hinh . "', so_luong='" . $soluong . "', danh_gia='" . $danhgia . "', man_hinh='" . $manhinh . "', he_dieu_hanh='" . $hedieuhanh . "', camera_truoc='" . $cameratruoc . "', camera_sau='" . $camerasau . "', cpu='" . $cpu . "', ram='" . $ram . "', pin='" . $pin . "', memory='" . $memory . "', gia_tri_khuyen_mai	='" . $giatrikhuyenmai	 . "' where id=" . $id;
    } else {
        $sql = "update sanpham set iddm='" . $iddm . "', idkm='" . $idkm . "', idmau='" . $idmau . "', name='" . $tensp . "', price='" . $giasp . "', so_luong='" . $soluong . "', danh_gia='" . $danhgia . "', man_hinh='" . $manhinh . "', he_dieu_hanh='" . $hedieuhanh . "', camera_truoc='" . $cameratruoc . "', camera_sau='" . $camerasau . "', cpu='" . $cpu . "', ram='" . $ram . "', pin='" . $pin . "', memory='" . $memory . "', gia_tri_khuyen_mai	='" . $giatrikhuyenmai	 . "' where id=" . $id;
    }



    pdo_execute($sql);
}
?>