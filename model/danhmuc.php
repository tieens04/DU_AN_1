<?php
function insert_danhmuc($tenloai, $img)
{
    $sql = "INSERT INTO danhmuc(name,img) values('$tenloai','$img')";
    pdo_execute($sql);
}
function delete_danhmuc($id)
{
    $sql = "delete from danhmuc where id=" . $id;
    pdo_execute($sql);
}
function loadall_danhmuc($kyw = "", $id = 0)
{;
    $sql = "select * from danhmuc where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($id > 0) {
        $sql .= " and id = '" . $id . "'";
    }
    $sql .= " order by id desc ";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadall_danhmuc_header()
{
    $sql = "select * from danhmuc where 1 order by id desc limit 0,5";
    $listdanhmuc = pdo_query($sql);
    return $listdanhmuc;
}
function loadone_danhmuc($id)
{
    $sql = "select * from danhmuc where id=" . $id;
    $dm = pdo_query_one($sql);
    return $dm;
}
function update_danhmuc($id, $tenloai, $img)
{
    $sql = "update danhmuc set name='" . $tenloai . "' ,img ='" . $img . "' where id=" . $id;
    pdo_execute($sql);
}
function load_tendm($iddm)
{
    if ($iddm > 0) {
        $sql = "select * from danhmuc where id=" . $iddm;
        $dm = pdo_query_one($sql);
        extract($dm);
        return $name;
    } else {
        return "";
    }
}
function load_tenmau($idmau)
{
    if ($idmau > 0) {
        $sql = "select * from mau where id=" . $idmau;
        $mau = pdo_query_one($sql);
        extract($mau);
        return $name;
    } else {
        return "";
    }
}
