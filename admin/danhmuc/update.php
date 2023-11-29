<?php
    if (is_array($dm)) {
        extract($dm);
    }

?>
<form action="index.php?act=updatedm" method="POST" enctype="multipart/form-data">
    <table class="table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm loại sản phẩm</th>
        </tr>
        <tr>
            <td>Mã loại</td>
            <td><input type="text" name="maloai" placeholder="nhập vào mã loại" value="<?php if(isset($id)&&($id!="")) echo $id ;?>"></td>
        </tr>
        <tr>
            <td>Loại:</td>
            <td><input type="text" name="tenloai" placeholder="nhập vào tên loại" value="<?php if(isset($name)&&($name!="")) echo $name ;?>"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td><input type="file" name="img"><?=$img?></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                <input class="button" type="submit" name="capnhat" value="CẬP NHẬT">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listdm'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if(isset($thongbao)&&($thongbao!="")) 
    echo $thongbao;
    ?>
</form>