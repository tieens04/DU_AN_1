<?php
function insert_binhluan($iduser, $idpro, $noidung, $ngaybinhluan)
{
    // Thêm JOIN vào câu truy vấn để lấy thông tin user từ bảng taikhoan dựa trên iduser
    $sql = "INSERT INTO binhluan(iduser, idpro, noidung, ngaybinhluan)
            VALUES('$iduser', '$idpro', '$noidung', '$ngaybinhluan')";
    pdo_execute($sql);
}

function loadall_binhluan($idpro)
{
    $sql = "SELECT binhluan.*, taikhoan.user AS username
            FROM binhluan
            INNER JOIN taikhoan ON binhluan.iduser = taikhoan.id
            WHERE binhluan.idpro = '$idpro'
            ORDER BY binhluan.id DESC";
    return pdo_query($sql);
}

function delete_binhluan($id)
{
    $sql = "DELETE FROM binhluan WHERE id = " . $id;
    pdo_execute($sql);
}
