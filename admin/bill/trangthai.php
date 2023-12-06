<?php
// Include hoặc require các hàm và kết nối cơ sở dữ liệu ở đây

// Kiểm tra nếu tồn tại ID được truyền qua URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $bill = loadone_bill($id);

    // Kiểm tra xem dữ liệu hóa đơn có tồn tại hay không
    if (is_array($bill) && !empty($bill)) {
        extract($bill);
    } else {
        // Xử lý khi không tìm thấy dữ liệu hóa đơn
        echo "Không tìm thấy thông tin đơn hàng.";
        // Có thể redirect người dùng về trang danh sách đơn hàng hoặc hiển thị thông báo lỗi khác
        exit; // Dừng xử lý để ngăn việc hiển thị form cập nhật trạng thái không hợp lệ
    }
} else {
    // Xử lý khi không có ID được truyền qua URL
    echo "Không tìm thấy ID đơn hàng.";
    // Có thể redirect người dùng về trang danh sách đơn hàng hoặc hiển thị thông báo lỗi khác
    exit; // Dừng xử lý để ngăn việc hiển thị form cập nhật trạng thái không hợp lệ
}
?>

<!-- Form cập nhật trạng thái đơn hàng -->
<form action="index.php?act=updatetrangthai" method="POST">
    <table class="table-outline table-content table-header">
        <tr>
            <th colspan="2">Cập nhật trạng thái đơn hàng</th>
        </tr>
        <tr>
            <td>Mã đơn hàng:</td>
            <td><input type="text" value="<?php if (isset($id) && ($id != ""))
                echo $id; ?>" readonly></td>
        </tr>
        <tr>
            <td>Trạng thái:</td>
            <td>
                <select name="trangthai" id="">
                    <option value="0" <?php if (isset($bill["bill_status"]) && $bill["bill_status"] == 0)
                        echo 'selected'; ?>>Đơn hàng mới</option>
                    <option value="1" <?php if (isset($bill["bill_status"]) && $bill["bill_status"] == 1)
                        echo 'selected'; ?>>Đang xử lý</option>
                    <option value="2" <?php if (isset($bill["bill_status"]) && $bill["bill_status"] == 2)
                        echo 'selected'; ?>>Đang giao hàng</option>
                    <option value="3" <?php if (isset($bill["bill_status"]) && $bill["bill_status"] == 3)
                        echo 'selected'; ?>>Hoàn tất</option>
                </select>
            </td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php if (isset($id) && ($id > 0))
                    echo $id; ?>">
                <input class="button" type="submit" name="capnhat" value="CẬP NHẬT">
                <button class="button" type="button" onclick="window.location.href='index.php?act=listbill'">DANH
                    SÁCH</button>
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != "")) {
        echo $thongbao;
    }
    ?>
</form>