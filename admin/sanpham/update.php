<?php
if (is_array($sp)) {
    extract($sp);
}
$hinhpath = "../upload/" . $img;
if (is_file($hinhpath)) {
    $hinh = "<img src='" . $hinhpath . "' height='80'>";
} else {
    $hinh = "no photo";
}
?>
<form action="index.php?act=updatesp" method="POST" enctype="multipart/form-data">
    <table class=" table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm Sản Phẩm</th>
        </tr>
        <tr>
            <td>Tên sản phẩm:</td>
            <td><input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" value="<?php echo $sp['name']?>"></td>
        </tr>
        <tr>
            <td>Hãng:</td>
            <td>
            <select name="iddm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listdanhmuc as $danhmuc) {
                        extract($danhmuc);
                        if($iddm==$id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '"  '.$s.'>' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="gia" placeholder="nhập vào giá" value="<?=$price?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" placeholder="nhập vào số lượng" value="<?=$soluong?>"></td>
        </tr>
        <tr>
            <td>Đánh giá</td>
            <td><input type="text" name="danhgia" placeholder="nhập vào lượt đánh giá" value="<?=$danhgia?>"></td>
        </tr>
        <tr>
            <td>Khuyến mãi:</td>
            <td>
                <select name="idsale" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listsale as $sale) {
                        extract($sale);
                        if($idsale==$id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '"  '.$s.'>' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá trị khuyến mãi</td>
            <td><input type="text" name="giatrikhuyenmai" placeholder="nhập vào giá trị khuyến mãi" value="<?=$value_sale?>"></td>
        </tr>
        <tr>
            <td>Màu:</td>
            <td>
            <select name="id_color" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listcolor as $color) {
                        extract($color);
                        if($idcolor==$id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '"  '.$s.'>' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Màn hình</td>
            <td><input type="text" name="manhinh" placeholder="nhập vào màn hình" value="<?=$screen?>"></td>
        </tr>
        <tr>
            <td>Hệ điều hành</td>
            <td><input type="text" name="hedieuhanh" placeholder="nhập vào hệ điều hành" value="<?=$operating_system?>"></td>
        </tr>
        <tr>
            <td>Camara sau</td>
            <td><input type="text" name="cameratruoc" placeholder="nhập vào camera sau" value="<?=$rear_camera?>"></td>
        </tr>
        <tr>
            <td>Camara trước</td>
            <td><input type="text" name="camerasau" placeholder="nhập vào camera trước" value="<?=$front_camera?>"></td>
        </tr>
        <tr>
            <td>CPU</td>
            <td><input type="text" name="cpu" placeholder="nhập vào cpu" value="<?=$cpu?>"></td>
        </tr>
        <tr>
            <td>RAM</td>
            <td><input type="text" name="ram" placeholder="nhập vào ram" value="<?=$ram?>"></td>
        </tr>
        <tr>
            <td>Bộ nhớ trong</td>
            <td><input type="text" name="bonhotrong" placeholder="nhập vào bộ nhớ trong" value="<?=$memory?>"></td>
        </tr>
        <tr>
            <td>Dung lượng Pin</td>
            <td><input type="text" name="dungluongpin" placeholder="nhập vào dung lượng pin" value="<?=$battery_capacity?>"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td><input type="file" name="hinh"><?=$hinh?></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php echo $sp['id']?>">
                <input class="button" type="submit" name="capnhat" value="CẬP NHẬT">
                <button class="button" type="reset">NHẬP LẠI</button>
                <button class="button" type="button" onclick="window.location.href='index.php?act=listsp'">DANH SÁCH</button>
            </td>
        </tr>
        </div>
    </table>
    <?php
    if (isset($thongbao) && ($thongbao != ""))
        echo $thongbao;
    ?>
</form>