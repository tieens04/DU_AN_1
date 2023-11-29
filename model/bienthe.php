<?php
// Kết nối CSDL ở đây nếu chưa có kết nối

// Hàm thêm màu vào bảng trung gian
function insert_sanpham_mau($id_sanpham, $id_mau) {
    // Thực hiện truy vấn thêm dữ liệu vào bảng trung gian sanpham_mausac
    $sql = "INSERT INTO sanpham_mausac (id_sanpham, id_mau) VALUES ('$id_sanpham', '$id_mau')";
    // Ví dụ sử dụng hàm pdo_execute() hoặc một hàm tương tự bạn đã triển khai để thực thi truy vấn
}

// Hàm xóa màu khỏi bảng trung gian dựa trên ID sản phẩm
function delete_sanpham_mau_by_id_sanpham($id_sanpham) {
    // Thực hiện truy vấn xóa dữ liệu khỏi bảng trung gian sanpham_mausac
    $sql = "DELETE FROM sanpham_mausac WHERE id_sanpham = '$id_sanpham'";
    // Ví dụ sử dụng hàm pdo_execute() hoặc một hàm tương tự bạn đã triển khai để thực thi truy vấn
}

// Hàm lấy danh sách màu của sản phẩm dựa trên ID sản phẩm
function get_mauby_id_sanpham($id_sanpham) {
    // Thực hiện truy vấn để lấy danh sách màu của sản phẩm
    $sql = "SELECT mau.id, mau.name FROM mau INNER JOIN sanpham_mausac ON mau.id = sanpham_mausac.id_mau WHERE sanpham_mausac.id_sanpham = '$id_sanpham'";
    // Ví dụ sử dụng hàm pdo_query() hoặc một hàm tương tự bạn đã triển khai để thực thi truy vấn và lấy kết quả
}



?>