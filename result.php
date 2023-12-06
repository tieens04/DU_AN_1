<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Quantity</title>
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
</head>
<body>

    <div id="product-list">
        <!-- Đây là danh sách sản phẩm với các ô nhập liệu số lượng và nút cập nhật -->
        <div class="product-item" data-product-id="1">
            <span>Product A</span>
            <input type="number" class="quantity-input" value="1">
            <button onclick="updateQuantity(1)">Cập nhật</button>
        </div>

        <div class="product-item" data-product-id="2">
            <span>Product B</span>
            <input type="number" class="quantity-input" value="1">
            <button onclick="updateQuantity(2)">Cập nhật</button>
        </div>
        <!-- ... Các sản phẩm khác ... -->
    </div>

    <script>
        function updateQuantity(productId) {
            var quantity = $(".product-item[data-product-id='" + productId + "'] .quantity-input").val();

            $.ajax({
                type: 'POST',
                url: 'thu.php',
                data: { productId: productId, quantity: quantity },
                success: function(response) {
                    console.log(response); // Phản hồi từ tệp PHP (nếu cần)
                    // Gọi hàm cập nhật DOM hoặc thực hiện các thao tác khác nếu cần
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    </script>

</body>
</html>
