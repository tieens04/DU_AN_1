<main class="catalog  mb ">

    <div class="boxleft">
        <div class="" style="text-align:center">
            <h2>Cảm ơn quý khách đã đặt hàng</h2>
        </div>
        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
        }
        ?>
        <div class="">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row2 mb10 formds_loai" style="text-align:center">
                <li>- Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                <li>- Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                <li>- Tổng đơn hàng: <?= $bill['total']; ?></li>
                <li>- Phương thức thanh toán: <?= $bill['bill_pttt']; ?></li>
            </div>
            <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
        </div>
        <form action="index.php?act=billcomfirm" method="POST">
            <div class="row2 mb10 formds_loai">
                <table>

                    <tr>
                        <td>Người đặt hàng</td>
                        <td>
                            <?= $bill['bill_name']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <?= $bill['bill_address']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>
                            <?= $bill['bill_email']; ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Điện thoại</td>
                        <td>
                            <?= $bill['bill_tel']; ?>
                        </td>
                    </tr>

                </table>
            </div>
            <div class="items">
                <div class="">Chi tiết giỏ hàng</div>
                <div class="row2 mb10 formds_loai">
                    <table>
                        <?php
                        bill_chi_tiet($bill_ct);
                        ?>
                    </table>
                </div>
            </div>
        </form>
    </div>

    

</main>