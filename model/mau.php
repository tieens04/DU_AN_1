<?php
function insert_mau($tenmau)
{
    $sql = "INSERT INTO mau(name) values('$tenmau')";
    pdo_execute($sql);
}
function delete_mau($id)
{
    $sql = "delete from mau where id=" . $id;
    pdo_execute($sql);
}
function loadall_mau()
{
    $sql = "select * from mau order by id desc";
    $listmau = pdo_query($sql);
    return $listmau;
}
function loadone_mau($id)
{
    $sql = "select * from mau where id=" . $id;
    $mau = pdo_query_one($sql);
    return $mau;
}
function update_mau($id, $tenmau)
{
    $sql = "update mau set name='" . $tenmau . "' where id=" . $id;
    pdo_execute($sql);
}
