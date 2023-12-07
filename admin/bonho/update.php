<?php
    if (is_array($bonho)) {
        extract($bonho);
    }
?>
<form action="index.php?act=updatebonho" method="POST">
<table class="table-outline table-content table-header form-table">
        <tr>
            <th colspan="2">Thêm bộ nhớ sản phẩm</th>
        </tr>
        <tr>
            <td>Mã bộ nhớ:</td>
            <td><input type="text" name="mabonho" placeholder="nhập vào mã bộ nhớ" value="<?php if(isset($id)&&($id!="")) echo $id ;?>"></td>
        </tr>
        <tr>
            <td>Bộ nhớ:</td>
            <td><input type="text" name="tenbonho" placeholder="nhập vào tên bộ nhớ" value="<?php if(isset($name)&&($name!="")) echo $name ;?>"></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php if(isset($id)&&($id>0)) echo $id ;?>">
                <input class="button" type="submit" name="capnhat" value="CẬP NHẬT">    
                <button class="button" type="button" onclick="window.location.href='index.php?act=listbonho'">DANH SÁCH</button>
                <input class="button" type="reset" value="NHẬP LẠI">
            </td>
        </tr>
    </table>
    <?php
    if(isset($thongbao)&&($thongbao!="")) 
    echo $thongbao;
    ?>
</form>


