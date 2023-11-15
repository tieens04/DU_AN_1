<?php
function insert_taikhoan($email, $user, $pass) //thêm tài khoản
{
    $sql = "INSERT INTO taikhoan(email,user,pass) values('$email','$user','$pass')";
    pdo_execute($sql);
}
function checkuser($user, $pass) //check user, pass với data base
{
    $sql = "select * from taikhoan where user='" . $user . "' AND pass='" . $pass . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function checkemail($email)//check email với data base
{
    $sql = "select * from taikhoan where email='" . $email . "'";
    $sp = pdo_query_one($sql);
    return $sp;
}
function update_taikhoan($id, $user, $pass, $email, $address, $tel)
{

    $sql = "update taikhoan set user='" . $user . "', pass='" . $pass . "', email='" . $email . "', address='" . $address . "', tel='" . $tel . "' where id=" . $id;
    pdo_execute($sql);
}
function loadall_taikhoan()
{
    $sql = "select * from taikhoan order by id desc";
    $listtaikhoan = pdo_query($sql);
    return $listtaikhoan;
}
function delete_taikhoan($id)
{
    $sql = "delete from taikhoan where id=" . $id;
    pdo_execute($sql);
}
?>