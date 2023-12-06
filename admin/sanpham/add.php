<form name="myForm" action="index.php?act=addsp" method="POST" enctype="multipart/form-data" onsubmit="return validateForm()">
    <table class=" table-outline table-content table-header">
        <tr>
            <th colspan="2">Thêm Sản Phẩm</th>
        </tr>
        <tr>
            <td>Tên sản phẩm:</td>
            <td><input type="text" name="tensp" placeholder="nhập vào tên sản phẩm"></td>
        </tr>
        <tr>
            <td>Hãng sản phẩm:</td>
            <td>
            <select name="iddm">
                    <?php
                        foreach ($listdanhmuc as $danhmuc) {
                            extract($danhmuc);
                            echo '<option value="'.$id.'">'.$name.'</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá</td>
            <td><input type="text" name="giasp" placeholder="nhập vào giá"></td>
        </tr>
        <tr>
            <td>Số lượng</td>
            <td><input type="text" name="soluong" placeholder="nhập vào số lượng"></td>
        </tr>
        <tr>
            <td>Đánh giá</td>
            <td><input type="text" name="danhgia" placeholder="nhập vào lượt đánh giá"></td>
        </tr>
        <tr>
            <td>Khuyến mãi:</td>
            <td>
                <select name="idkm">
                    <?php
                    foreach ($listkhuyenmai as $khuyenmai) {
                        extract($khuyenmai);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Giá trị khuyến mãi (theo phần trăm) </td>
            <td><input type="text" name="giatrikhuyenmai" placeholder="nhập vào giá trị khuyến mãi"></td>
        </tr>
        <tr>
            <td>Màu:</td>
            <td>
                <select name="idmau">
                    <?php
                    foreach ($listmau as $mau) {
                        extract($mau);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Màn hình</td>
            <td><input type="text" name="manhinh" placeholder="nhập vào màn hình"></td>
        </tr>
        <tr>
            <td>Hệ điều hành</td>
            <td><input type="text" name="hedieuhanh" placeholder="nhập vào hệ điều hành"></td>
        </tr>
        <tr>
            <td>Camara sau</td>
            <td><input type="text" name="cameratruoc" placeholder="nhập vào camera sau"></td>
        </tr>
        <tr>
            <td>Camara trước</td>
            <td><input type="text" name="camerasau" placeholder="nhập vào camera trước"></td>
        </tr>
        <tr>
            <td>CPU</td>
            <td><input type="text" name="cpu" placeholder="nhập vào cpu"></td>
        </tr>
        <tr>
            <td>RAM</td>
            <td><input type="text" name="ram" placeholder="nhập vào ram"></td>
        </tr>
        <tr>
            <td>Bộ nhớ:</td>
            <td>
                <select name="idbonho">
                    <?php
                    foreach ($listbonho as $bonho) {
                        extract($bonho);
                        echo '<option value="' . $id . '">' . $name . '</option>';
                    }
                    ?>
                </select>
            </td>
        </tr>
        <tr>
            <td>Dung lượng Pin</td>
            <td><input type="text" name="pin" placeholder="nhập vào dung lượng pin"></td>
        </tr>
        <tr>
            <td>Hình</td>
            <td><input type="file" name="hinh" placeholder="nhập vào hình"></td>
        </tr>
        <tr>
            <td colspan="2" class="table-footer">
            <input class="button" type="submit" name="themmoi" value="THÊM MỚI">
            <input class="button" type="reset" value="NHẬP LẠI">
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
