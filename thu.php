<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $productId = $_POST['productId'];
    $quantity = $_POST['quantity'];

    // Thực hiện xử lý cập nhật trong cơ sở dữ liệu hoặc các tác vụ khác tùy thuộc vào nhu cầu của bạn
    // Ví dụ: Update số lượng sản phẩm trong cơ sở dữ liệu

    // Phản hồi về client (nếu cần)
    echo 'Số lượng sản phẩm đã được cập nhật thành công.';
}
?>
