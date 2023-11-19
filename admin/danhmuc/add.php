
<form action="index.php?act=adddm" method="POST">
    <table class="table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm loại sản phẩm</th>
        </tr>
        <tr>
            <td>Mã loại</td>
            <td><input type="text" name="maloai" placeholder="nhập vào mã loại"></td>
        </tr>
        <tr>
            <td>Loại:</td>
            <td><input type="text" name="tenloai" placeholder="nhập vào tên loại"></td>
        </tr>
        <tr>
            <td>Hình:</td>
            <td><input type="file" name="img"></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input class="button" type="submit" name="themmoi" value="THÊM MỚI">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listdm'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;

    ?>
</form>