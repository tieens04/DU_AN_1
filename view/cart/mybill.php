<main class="mb mybill">

    <div class="">

        <div class="">
            <div class="boxtitle">ĐƠN HÀNG CỦA BẠN</div>
        </div>
        
        <form action="index.php?act=mybill" method="POST">
            <div class="row2 mb10 formds_loai">
                <table class="listSanPham">
                <thead class="thead">
                    <tr style="font-size: 20;">
                        <th>Mã đơn hàng</th>
                        <th>Ngày đặt</th>
                        <th>Số lượng</th>
                        <th>Tổng giá trị đơn hàng</th>
                        <th>Phương thức thanh toán</th>
                        <th>Tình trạng đơn hàng</th>
                    </tr>
                </thead>
                <tbody class="tbody">
                    <?php 
                    if (is_array($listbill) && (isset($_SESSION['user']))) {
                        foreach ($listbill as $bill) {
                            extract($bill);
                            $ttdh = get_ttdh($bill['bill_status']);
                            $countsp = loadall_cart_count($bill['id']);
                            $pttt = get_pttt($bill['bill_pttt']);
                            
                    ?>
                     
                        <tr style="cursor: pointer;" data-id='<?php echo $bill['id']; ?>' class="userinfo">
                            <td><?php echo 'DAM-'.$bill['id'] ?></td>
                            <td><?php echo $bill['ngaydathang']; ?></td>
                            <td><?php echo $countsp; ?></td>
                            <td><?php echo $bill['total']; ?></td>
                            <td><?php echo $pttt; ?></td>
                            <td><?php echo $ttdh; ?></td>
                        </tr>
                    
                    <?php } ?>
                    </tbody>
                    <tr style="background-color: #99B898;color:aliceblue;"><td colspan="5">Cảm ơn quý khách</td></tr>
                    <?php } ?>
                </table>
            </div>
            
        </form>

    </div>
    <script type='text/javascript'>
        $(document).ready(function() {
            $('.userinfo').click(function() {
                var userid = $(this).data('id');
                $.ajax({
                    url: 'view/cart/ajaxfile.php',
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
            <div class="modal-content">
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

</main>