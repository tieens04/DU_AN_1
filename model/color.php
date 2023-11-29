<?php
function insert_color($tenmau)
{
    $sql = "INSERT INTO mau(name) values('$tenmau')";
    pdo_execute($sql);
}
function delete_color($id)
{
    $sql = "delete from mau where id=" . $id;
    pdo_execute($sql);
}
function loadone_color($id)
{
    $sql = "select * from mau where id=" . $id;
    $color = pdo_query_one($sql);
    return $color;
}
function update_color($id, $tenmau)
{
    $sql = "update mau set name='" . $tenmau . "' where id=" . $id;
    pdo_execute($sql);
}
function loadall_color()
{
    $sql = "select * from mau";
    $listcolor = pdo_query($sql);
    return $listcolor;
}

?>