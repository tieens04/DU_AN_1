<?php
function insert_khuyenmai($tenkhuyenmai)
{
    $sql = "INSERT INTO khuyenmai(name) values('$tenkhuyenmai')";
    pdo_execute($sql);
}
function delete_khuyenmai($id)
{
    $sql = "delete from khuyenmai where id=" . $id;
    pdo_execute($sql);
}
function loadall_khuyenmai()
{
    $sql = "select * from khuyenmai order by id desc";
    $listkhuyenmai = pdo_query($sql);
    return $listkhuyenmai;
}
function loadone_khuyemai($id)
{
    $sql = "select * from khuyenmai where id=" . $id;
    $khuyenmai = pdo_query_one($sql);
    return $khuyenmai;
}
function update_khuyenmai($id, $tenkhuyenmai)
{
    $sql = "update khuyenmai set name='" . $tenkhuyenmai . "' where id=" . $id;
    pdo_execute($sql);
}
