<section style="min-height: 85vh">
    <form action="index.php?act=viewcart" method="POST">
        <table class="listSanPham">
            <?php
            viewcart(1);
            ?>
        </table>
        <a href="index.php?act=bill">
            <input type="button" value="TIẾP TỤC ĐẶT HÀNG"></a>
             <a href="index.php?act=delcart"> 
                <input type="button" value="XÓA GIỎ HÀNG"> </a>
    </form>

</section>
<!-- End Section -->
