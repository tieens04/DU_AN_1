
        </div>
        <img src="view/img/banners/blackFriday.gif" alt="" style="width: 100%;">
        <div class="infoUser">
            <hr>
            
            <div class="boxtitle">ĐĂNG KÝ TÀI KHOẢN</div>
            <div class="row boxcontent formtaikhoan">
                <form action="index.php?act=dangky" method="post">
                    <div class="mb">
                    Email
                    <input type="email" name="email" id="">
                    </div>
                    
                    <div class="mb">
                    Tên đăng nhập
                    <input type="text" name="user" id="">
                    </div>

                    <div class="mb">
                    Mật khẩu
                    <input type="password" name="pass" id="">
                    </div>

                    <div class="mb">
                    Địa chỉ
                    <input type="text" name="address" id="" >
                    </div>

                    <div class="mb">
                    Điện thoại
                    <input type="text" name="tel" id="" >
                    </div>
                        
                    <div class="mb">
                    <input type="submit" value="Đăng ký" name="dangky">
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