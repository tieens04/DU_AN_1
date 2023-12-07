
<form action="index.php?act=addsale" method="POST">
<table class="table-outline table-content table-header form-table">
        <tr>
            <th colspan="2">Thêm loại khuyến mãi</th>
        </tr>
        <tr>
            <td>Mã khuyến mãi</td>
            <td><input type="text" name="maloai" placeholder="nhập vào mã loại"></td>
        </tr>
        <tr>
            <td>Tên khuyến mãi:</td>
            <td><input type="text" name="tensale" placeholder="nhập vào tên loại"></td>
        </tr>

        <tr>
            <td colspan="2" class="table-footer">
                <input class="button" type="submit" name="themmoi" value="THÊM MỚI">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listsale'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;

    ?>
</form>