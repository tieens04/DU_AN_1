<?php
    if (is_array($khuyenmai)) {
        extract($khuyenmai);
    }

?>
<form action="index.php?act=updatekm" method="POST">
    <table class="table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm loại sản phẩm</th>
        </tr>
        <tr>
            <td>Mã khuyến mãi</td>
            <td><input type="text" name="makm" placeholder="nhập vào mã khuyến mãi" value="<?php if(isset($id)&&($id!="")) echo $id ;?>"></td>
        </tr>
        <tr>
            <td>Tên khuyến mãi:</td>
            <td><input type="text" name="tenkm" placeholder="nhập vào tên khuyến mãi" value="<?php if(isset($name)&&($name!="")) echo $name ;?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                <input class="button" type="submit" name="capnhat" value="CẬP NHẬT">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listkm'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if(isset($thongbao)&&($thongbao!="")) 
    echo $thongbao;
    ?>
</form>