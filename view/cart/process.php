<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $soluongmoi = $_POST['soluong'];
    $id = $_POST['id'];
    
    // Kiểm giỏ hàng có tồn tại hay không
    if (!empty($_SESSION['mycart'])) {
        // Kiểm tra sản phẩm đã có trong giỏ hàng chưa
        $index = array_search($id, array_column($_SESSION['mycart'], 'id'));

        // Nếu sản phẩm tồn tại thì cập nhật lại số lượng
        if ($index !== false) {
            $_SESSION['mycart'][$index]['soluong'] = $soluongmoi;
        } else {
            echo 'Sản phầm ko tồn tại trong giỏ hàng';
        }
    }
    
}

?>