<?php
// function checksl(){
//     $sql = "select so_luong from sanpham where id".$id;
//     $listsanpham = pdo_query($sql);
//     return $listsanpham;
// }
function update_slsp($id_donhang,$so_luong_can_tru) {
    
    $sql = "UPDATE sanpham SET so_luong = so_luong - :so_luong_can_tru WHERE id = :id_donhang";
    $params = array(':so_luong_can_tru' => $so_luong_can_tru, ':id_donhang' => $id_donhang);
    return pdo_execute($sql, $params);
}
function loadall_sanpham_home_sanphammoi()
{
    $sql = "select * from sanpham where 1 order by id desc limit 0,5";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_home_noibatnhat()
{
    $sql = "SELECT sanpham.*, SUM(cart.soluong) AS total_sold_quantity
            FROM sanpham
            INNER JOIN cart ON sanpham.id = cart.idpro
            GROUP BY sanpham.id
            ORDER BY total_sold_quantity DESC
            LIMIT 0, 5";

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

function loadall_sanpham_duoi2tr($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham where price < 2000000 ORDER BY id DESC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tu_2_4($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham where price between 2000000 and 4000000 ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tu_4_7($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham where price between 4000000 and 7000000 ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tu_7_13($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham where price between 7000000 and 13000000 ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_tren_13($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham where price > 13000000 ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_mauxanh($idmau)
{
    $sql = "select * from sanpham where 1";
    if ($idmau > 0) {
        $sql .= " and idmau = '" . $idmau . "'";
    }
    $sql .= " order by id desc";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
// start - load sản phẩm + phân trang
function loadall_dssanpham($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY id ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function get_total_records()
{
    try {
        $conn = pdo_get_connection();
        $sql = "SELECT COUNT(*) AS total FROM sanpham";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        return $result['total'];
    } catch (PDOException $e) {
        throw $e;
    } finally {
        unset($conn);
    }
}

// end - load sản phẩm + phân trang


function loadone_sanpham($id)
{
    $sql = "select * from sanpham where id=" . $id;
    $sanpham = pdo_query_one($sql);
    return $sanpham;
}
function loadall_sanpham_cungloai($id, $iddm)
{
    // Sửa câu truy vấn SQL
    $sql = "SELECT * FROM sanpham WHERE iddm = $iddm AND id <> $id ORDER BY id DESC LIMIT 0, 5";

    // Thực hiện truy vấn và trả về kết quả
    $sanpham = pdo_query($sql);
    return $sanpham;
}

function delete_sanpham($id)
{
    $sql = "delete from sanpham where id=" . $id;
    pdo_execute($sql);
}
function insert_sanpham($iddm, $idkm, $idmau, $tensp, $giasp, $hinh, $soluong, $danhgia, $manhinh, $hedieuhanh, $cameratruoc, $camerasau, $cpu, $ram, $pin, $idbonho, $giatrikhuyenmai)
{
    $sql = "INSERT INTO sanpham(name,price,img,so_luong,iddm,danh_gia,man_hinh,he_dieu_hanh,camera_truoc,camera_sau,cpu,ram,idbonho,pin,idkm,idmau,gia_tri_khuyen_mai) 
    values('$tensp','$giasp','$hinh','$soluong','$iddm','$danhgia','$manhinh','$hedieuhanh','$camerasau','$cameratruoc','$cpu','$ram','$idbonho','$pin','$idkm','$idmau','$giatrikhuyenmai')";
    pdo_execute($sql);
}
function loadall_sanpham($kyw = "", $iddm = 0,)
{;
    $sql = "select * from sanpham where 1";
    if ($kyw != "") {
        $sql .= " and name like '%" . $kyw . "%'";
    }
    if ($iddm > 0) {
        $sql .= " and iddm = '" . $iddm . "'";
    }
    $sql .= " order by id desc ";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function update_sanpham($id, $iddm, $idkm, $idmau, $tensp, $giasp, $hinh, $soluong, $danhgia, $manhinh, $hedieuhanh, $cameratruoc, $camerasau, $cpu, $ram, $pin, $idbonho, $giatrikhuyenmai)
{
    if ($hinh != "") {
        $sql = "update sanpham set iddm='" . $iddm . "', idkm='" . $idkm . "', idmau='" . $idmau . "', name='" . $tensp . "', price='" . $giasp . "', img='" . $hinh . "', so_luong='" . $soluong . "', danh_gia='" . $danhgia . "', man_hinh='" . $manhinh . "', he_dieu_hanh='" . $hedieuhanh . "', camera_truoc='" . $cameratruoc . "', camera_sau='" . $camerasau . "', cpu='" . $cpu . "', ram='" . $ram . "', pin='" . $pin . "', idbonho='" . $idbonho . "', gia_tri_khuyen_mai	='" . $giatrikhuyenmai     . "' where id=" . $id;
    } else {
        $sql = "update sanpham set iddm='" . $iddm . "', idkm='" . $idkm . "', idmau='" . $idmau . "', name='" . $tensp . "', price='" . $giasp . "', so_luong='" . $soluong . "', danh_gia='" . $danhgia . "', man_hinh='" . $manhinh . "', he_dieu_hanh='" . $hedieuhanh . "', camera_truoc='" . $cameratruoc . "', camera_sau='" . $camerasau . "', cpu='" . $cpu . "', ram='" . $ram . "', pin='" . $pin . "', idbonho='" . $idbonho . "', gia_tri_khuyen_mai	='" . $giatrikhuyenmai     . "' where id=" . $id;
    }
    pdo_execute($sql);
}

function loadall_sanpham_gia_tangdan($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY price ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_gia_giamdan($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY price DESC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}

function loadall_sanpham_danhgia_tang($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY danh_gia ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_danhgia_giam($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY danh_gia DESC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_adenz($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY name ASC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
function loadall_sanpham_zdena($current_page = 1, $item_per_page = 10)
{
    $offset = ($current_page - 1) * $item_per_page;
    $sql = "SELECT * FROM sanpham ORDER BY name DESC LIMIT $item_per_page OFFSET $offset";
    $listsanpham = pdo_query($sql);
    return $listsanpham;
}
