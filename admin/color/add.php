
<form action="index.php?act=addcolor" method="POST">
    <table class="table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm loại màu sản phẩm</th>
        </tr>
        <tr>
            <td>Mã màu:</td>
            <td><input type="text" name="mamau" placeholder="nhập vào tên màu"></td>
        </tr>
        <tr>
            <td>Màu:</td>
            <td><input type="text" name="tenmau" placeholder="nhập vào tên màu"></td>
        </tr>

        <tr>
            <td colspan="2" class="table-footer">
                <input class="button" type="submit" name="themmoi" value="THÊM MỚI">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listcolor'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;

    ?>
</form>