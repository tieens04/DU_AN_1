
<div class="sanpham">
    <div class="table-content">
        <form action="#" method="POST">
            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th style="width: 5%">Mã bình luận <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Nội dung <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Mã người dùng <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Mã sản phẩm <i class="fa fa-sort"></i></th>
                    <th style="width: 20%">Ngày bình luận <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Hành động</th>
                </tr>
            </table>
            <?php
            foreach ($listbinhluan as $binhluan) {
                extract($binhluan);
                $xoabl="index.php?act=xoabl&id=".$id;
                echo '
                        <table class="table-outline">
                        <tbody>
                            <tr>
                                <td style="width: 5%">' . $id . '</td>   
                                <td style="width: 10%">' . $noidung . '</td>
                                <td style="width: 10%">' . $iduser . '</td>
                                <td style="width: 15%">' . $idpro . '</td>
                                <td style="width: 20%">' . $ngaybinhluan . '</td>
                                <td style="width: 10%">
                                    <div class="tooltip">
                                    <a href="'.$xoabl.'""><i class="fa fa-trash"></i></a>
                                <span class="tooltiptext">Xóa</span>
                            </div>
                            </td>
                            </td>
                            </tr>
                            </tbody>
                            </table>
                    ';
            }
            ?>
    </div>
    
    </form>
</div>
