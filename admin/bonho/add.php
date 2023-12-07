
<form action="index.php?act=addbonho" method="POST">
    
<table class="table-outline table-content table-header form-table">
        <tr>
            <th colspan="2">Thêm bộ nhớ sản phẩm</th>
        </tr>
        <tr>
            <td>Mã bộ nhớ:</td>
            <td><input type="text" name="mabonho" placeholder="nhập vào mã bộ nhớ"></td>
        </tr>
        <tr>
            <td>Bộ nhớ:</td>
            <td><input type="text" name="tenbonho" placeholder="nhập vào bộ nhớ"></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input class="button" type="submit" name="themmoi" value="THÊM MỚI">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listbonho'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>