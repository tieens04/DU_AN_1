<?php
function insert_taikhoan($email, $user, $pass)
{
    $sql = "insert into taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass)
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{
    $sql = "update taikhoan set user='" . $user . "', pass='" . $pass . "', email='" . $email . "', address='" . $address . "', tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
function checkemail($email, $tel)
{
    $sql = "select * from taikhoan where email='" . $email . "' AND tel='" . $tel . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function loadall_taikhoan($kyw, $id = 0)
{
    $sql = "SELECT * FROM taikhoan WHERE 1";
    if ($id > 0) $sql .= " AND id=" . $id;
    if ($kyw != "") $sql .= " AND id like '%".$kyw."%'";
    $sql .= " ORDER BY id DESC";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
