<?php
    if (is_array($sale)) {
        extract($sale);
    }

?>
<form action="index.php?act=updatesale" method="POST">
    <table class="table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm loại sản phẩm</th>
        </tr>
        <tr>
            <td>Mã sale</td>
            <td><input type="text" name="masale" placeholder="nhập vào mã loại" value="<?php if(isset($id)&&($id!="")) echo $id ;?>"></td>
        </tr>
        <tr>
            <td>Sale:</td>
            <td><input type="text" name="tensale" placeholder="nhập vào tên loại" value="<?php if(isset($name)&&($name!="")) echo $name ;?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                <input class="button" type="submit" name="capnhat" value="CẬP NHẬT">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listsale'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if(isset($thongbao)&&($thongbao!="")) 
    echo $thongbao;
    ?>
</form>


