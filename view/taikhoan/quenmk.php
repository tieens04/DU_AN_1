
</div>
        <img src="view/img/banners/blackFriday.gif" alt="" style="width: 100%;">
        <div class="infoUser">
            <hr>
            
            <div class="boxtitle">QUÊN MẬT KHẨU</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=quenmk" method="post">
                    <div class="mb">
                    Email
                    <input type="email" name="email" id="">
                    </div>

                    <div class="mb">
                    Điện thoại
                    <input type="text" name="tel" id="" >
                    </div>
                        
                    <div class="mb">
                    <input type="submit" value="Gửi" name="guiemail">
                    <input type="reset" value="Nhập lại">
                    </div>

                    
                    
                </form> 
                <h2 class="thongbao">
                <?php 
                    
                    if(isset($thongbao)&&($thongbao!="")){
                        echo $thongbao;
                    }
                    
                ?>
                </h2>       
            </div>
        </div>

    
</body>

</html>