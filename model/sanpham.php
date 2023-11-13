<?php
function insert_sanpham($tensp, $giasp, $hinh, $iddm, $soluong, $danhgia,$manhinh,$hedieuhanh,$camerasau,$cameratruoc,$cpu,$ram,$memory,$pin,$idsale,$idcolor,$giatrikhuyenmai)
{
    $sql = "INSERT INTO sp(name,price,img,id_dm,soluong,danhgia,screen,operating_system,rear_camera,front_camera,cpu,ram,memory,battery_capacity,id_sale,id_color,value_sale) 
    values('$tensp','$giasp','$hinh','$iddm','$soluong','$danhgia','$manhinh','$hedieuhanh','$camerasau','$cameratruoc','$cpu','$ram','$memory','$pin','$idsale','$idcolor','$giatrikhuyenmai')";
    pdo_execute($sql);
}
function delete_sanpham($id)
{
    $sql = "delete from sp where id=" . $id;
    pdo_execute($sql);
}
function loadall_sanpham_top10()
{
    $sql = "select * from sp where 1 order by view desc limit 0,10";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home()
{
    $sql = "select * from sp where 1 order by id desc limit 0,9";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham($kyw = "", $iddm = 0)
{
    $sql = "select * from sp where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and id_dm = '" . $iddm . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function load_ten_dm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from loaisp where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name; //trả về tên dm
    } else {
        return "";
    }

}
function loadone_sanpham($id)
{
    $sql = "select * from sp where id=" . $id;
    $sp = pdo_query_one($sql);
    return $sp;
}
function load_sanpham_cungloai($id, $iddm)
{
    $sql = "select * from sp where id_dm=" . $iddm . " AND id <>" . $id; //cùng danh mục nma khác id,<> là khác với dữ liệu hiện tại
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id,$tensp, $giasp, $hinh, $iddm, $soluong, $danhgia,$manhinh,$hedieuhanh,$camerasau,$cameratruoc,$cpu,$ram,$memory,$pin,$idsale,$idcolor,$giatrikhuyenmai)
{
    if ($hinh != "") {
        $sql = "update sanpham set id_dm='" . $iddm . "', name='" . $tensp . "', price='" . $giasp . "', soluong='" . $soluong . "', danhgia='" . $danhgia . "', idsale='" . $idsale . "', idcolor='" . $idcolor . "', giatrikhuyenmai='" . $giatrikhuyenmai . "', manhinh='" . $manhinh . "', hedieuhanh='" . $hedieuhanh . "', cameratruoc='" . $cameratruoc . "', camerasau='" . $camerasau . "',cpu='" . $cpu . "', ram='" . $ram . "', memory='" . $memory . "', pin='" . $pin . "' img='" . $hinh . "' where id=" . $id;
    } else {
        $sql = "update sanpham set id_dm='" . $iddm . "', name='" . $tensp . "', price='" . $giasp . "', soluong='" . $soluong . "', danhgia='" . $danhgia . "', idsale='" . $idsale . "', idcolor='" . $idcolor . "', giatrikhuyenmai='" . $giatrikhuyenmai . "', manhinh='" . $manhinh . "', hedieuhanh='" . $hedieuhanh . "', cameratruoc='" . $cameratruoc . "', camerasau='" . $camerasau . "',cpu='" . $cpu . "', ram='" . $ram . "', memory='" . $memory . "', pin='" . $pin . "' where id=" . $id;
    }



    pdo_execute($sql);
}
?>