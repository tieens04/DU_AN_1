<div class="sanpham">
    <div class="table-content">
        <form action="index.php?act=listbill" method="POST">

            <table class="table-header">
                <tr>
                    <!-- Theo độ rộng của table content -->
                    <th style="width: 10%">Mã đơn hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 25%">Khách hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Số lượng hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Giá trị đơn hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 20%">Ngày đặt hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 10%">Tình trạng đơn hàng <i class="fa fa-sort"></i></th>
                    <th style="width: 15%">Thao tác <i class="fa fa-sort"></i></th>

                </tr>
            
            <?php
            // Loop qua từng đơn hàng trong mảng $listbill và hiển thị thông tin của mỗi đơn hàng
            foreach ($listbill as $bill) {
                extract($bill);
                $suatrangthai = "index.php?act=trangthai&id=" . $id;
                $huy_don_hang = "index.php?act=huydonhang&id=" . $id;
                $kh = $bill["bill_name"] . '<br>' . $bill["bill_email"] . '<br>' . $bill["bill_address"] . '<br>' . $bill["bill_tel"];
                $ttdh = get_ttdh($bill["bill_status"]);
                $countsp = loadall_cart_count($bill['id']);
                ?>
                
                
                    
                        <tbody>
                            <tr>
                                <td style="cursor: pointer;width: 10%" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo 'DAM-' . $bill['id'] ?></td>   
                                <td style="cursor: pointer;width: 25%" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $kh ?></td>
                                <td style="cursor: pointer;width: 10%" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $countsp ?></td>
                                <td style="cursor: pointer;width: 10%" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo number_format($bill["total"], 0, ".", ".") ?>₫</td>
                                <td style="cursor: pointer;width: 20%" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $bill["ngaydathang"] ?></td>
                                <td style="cursor: pointer;width: 10%" data-id='<?php echo $bill['id']; ?>' class="userinfo"><?php echo $ttdh ?></td>
                                <td style="cursor: pointer;width: 15%" data-id='<?php echo $bill['id']; ?>' class="userinfo">
                                    <?php echo '<a style="text-decoration: none; cursor: pointer;font-size:12px" href="' . $suatrangthai . '" class="update-status-button">Cập nhật trạng thái</a>' ?>
                                    <?php echo '<a style="text-decoration: none; cursor: pointer;font-size:12px" href="' . $huy_don_hang . '" class="cancel-order-button">Hủy đơn hàng</a>' ?>
                                </td>
                            </tr>
                        </tbody>
                    
            <?php
            }
            ?>
        </table>
    </div>
    <div class="table-footer">
        <input type="text" name="kyw" placeholder="Tìm kiếm...">
        <input type="submit" name="listok" value="OK">
    </div>
    </form>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('.userinfo').click(function() {
                var userid = $(this).data('id');
                $.ajax({
                    url: '../view/cart/ajaxfile.php',
                    type: 'post',
                    data: {
                        userid: userid
                    },
                    success: function(response) {
                        $('.modal-body').html(response);
                        $('#exampleModal').modal('show');
                    }
                });
            });
        });
    </script>
    <div class="modal fade" id="exampleModal" role="dialog">
                <div class="modal-dialog">
                    <div class="modal-content" style="background-color: #eee;">
                        <div class="modal-header">
                            <h4 class="modal-title">Thông tin chi tiết</h4>
                            <button type="button" class="close" data-dismiss="modal">×</button>
                        </div>
                        <div class="modal-body">

                        </div>
                        <div class="modal-footer">
                
                            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                    </div>
                </div>
            </div>
</div>
