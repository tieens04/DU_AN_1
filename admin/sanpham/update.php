<?php
if (is_array($sanpham)) {
    extract($sanpham);
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
            <td><input type="text" name="tensp" placeholder="nhập vào tên sản phẩm" value="<?php echo $sanpham['name']?>"></td>
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
            <td><input type="text" name="giasp" placeholder="nhập vào giá" value="<?=$price?>"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" placeholder="nhập vào số lượng" value="<?=$so_luong?>"></td>
        </tr>
        <tr>
            <td>Đánh giá</td>
            <td><input type="text" name="danhgia" placeholder="nhập vào lượt đánh giá" value="<?=$danh_gia?>"></td>
        </tr>
        <tr>
            <td>Khuyến mãi:</td>
            <td>
                <select name="idkm" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listkhuyenmai as $khuyenmai) {
                        extract($khuyenmai);
                        if($idkm==$id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '"  '.$s.'>' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá trị khuyến mãi</td>
            <td><input type="text" name="giatrikhuyenmai" placeholder="nhập vào giá trị khuyến mãi" value="<?=$gia_tri_khuyen_mai?>"></td>
        </tr>
        <tr>
            <td>Màu:</td>
            <td>
            <select name="idmau" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listmau as $mau) {
                        extract($mau);
                        if($idmau==$id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '"  '.$s.'>' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Màn hình</td>
            <td><input type="text" name="manhinh" placeholder="nhập vào màn hình" value="<?=$man_hinh?>"></td>
        </tr>
        <tr>
            <td>Hệ điều hành</td>
            <td><input type="text" name="hedieuhanh" placeholder="nhập vào hệ điều hành" value="<?=$he_dieu_hanh?>"></td>
        </tr>
        <tr>
            <td>Camara sau</td>
            <td><input type="text" name="cameratruoc" placeholder="nhập vào camera sau" value="<?=$camera_truoc?>"></td>
        </tr>
        <tr>
            <td>Camara trước</td>
            <td><input type="text" name="camerasau" placeholder="nhập vào camera trước" value="<?=$camera_sau?>"></td>
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
            <td>Bộ nhớ trong:</td>
            <td>
                <select name="idbonho" id="">
                    <option value="0" selected>Tất cả</option>
                    <?php
                    foreach ($listbonho as $bonho) {
                        extract($bonho);
                        if($idbonho==$id) $s="selected"; else $s="";
                        echo '<option value="' . $id . '"  '.$s.'>' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Dung lượng Pin</td>
            <td><input type="text" name="pin" placeholder="nhập vào dung lượng pin" value="<?=$pin?>"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td><input type="file" name="hinh"><?=$hinh?></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
                <input type="hidden" name="id" value="<?php echo $sanpham['id']?>">
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