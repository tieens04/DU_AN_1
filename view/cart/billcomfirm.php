<div class="" style="text-align:center">
    <marquee>Cảm ơn quý khách đã đặt hàng</marquee>
</div>
<main class="catalog mb">
    <div class="boxleft">
        <div class="mb">
            <div class="boxtitle">Chi tiết giỏ hàng</div>
            <div>
                <table class="listSanPham">
                    <?php
                    bill_chi_tiet($bill_ct);
                    ?>
                </table>

            </div>
        </div>
    </div>
    <div class="boxright">

        <?php
        if (isset($bill) && (is_array($bill))) {
            extract($bill);
            $pttt = get_pttt($bill['bill_pttt']);
        }
        ?>
        <div class="formtaikhoan">
            <div class="boxtitle">THÔNG TIN ĐƠN HÀNG</div>
            <div class="row2 mb10 formds_loai" style="list-style: none;">
                <li>- Mã đơn hàng: DAM-<?= $bill['id']; ?></li>
                <li>- Ngày đặt hàng: <?= $bill['ngaydathang']; ?></li>
                <li>- Tổng đơn hàng: <?= $bill['total']; ?></li>
                <li>- Phương thức thanh toán: <?= $pttt; ?></li>
            </div>

        </div>
        <div class="formtaikhoan">
            <form action="index.php?act=billcomfirm" method="POST">
                <div>
                    <table>
                        <div class="boxtitle">THÔNG TIN ĐẶT HÀNG</div>
                        <div class="mb">
                            Người đặt hàng:
                            <?= $bill['bill_name']; ?>
                        </div>
                        <div class="mb">
                            Địa chỉ:
                            <?= $bill['bill_address']; ?>
                        </div>
                        <div class="mb">
                            Email:
                            <?= $bill['bill_email']; ?>
                        </div>
                        <div class="mb">
                            Điện thoại:
                            <?= $bill['bill_tel']; ?>
                        </div>

                    </table>
                </div>
            </form>
        </div>
    </div>

</main>